(function(){
  //UI configuration
  var itemSize = 24,
    cellSize = itemSize - 1,
    width = 1000,
    height = 800,
    journum = 0,
    yearnum = 0,
    currentyear = 2017,
    margin = {top:20,right:20,bottom:20,left:180};

  //data vars for rendering
  var yearExtent = [],
      data = null,
      countData = [0,526],
      yearOffset = 0,
      colorCalibration = ['#D0DCEB','#96C8E1','#5EA6D3','#FCC5C2','#F3948F','#EC645E','#CB111D','#9F0924'];

  //axises and scales
  var axisWidth = itemSize * yearnum, 
      axisHeight = itemSize * journum,

    xAxisScale = d3.scale.linear()
      .range([0,axisWidth])
      .domain([0,yearnum]),
    xAxis = d3.svg.axis()
      .orient('top')
      .ticks(10)
      .scale(xAxisScale);

    yAxisScale = d3.scale.linear()
      .range([0,axisHeight])
      .domain([0,journum]),
    yAxis = d3.svg.axis()
      .orient('left')
      .ticks(20)
      .scale(yAxisScale);

  var svg = d3.select('[role="heatmap"]');
  var heatmap = svg
    .attr('width',width)
    .attr('height',height)
  .append('g')
    .attr('width',width-margin.left-margin.right)
    .attr('height',height-margin.top-margin.bottom)
    .attr('transform','translate('+margin.left+','+margin.top+')');
  var rect = [];


    d3.json('assets/vis/pretty_journal_year_remove.json',function(err,data){

    data = data.data;
    //jourvalue = data[i].value;
    var paValueExtent = [];
    var jourData = [];

    yearExtent = d3.extent(data[0].value,function(d){
        return d['year'];
    });
    yearnum = yearExtent[1]-yearExtent[0]+1;
    axisWidth = itemSize*yearnum;
    yearOffset = yearExtent[0];


 	//bind click event
    d3.selectAll('[role="calibration"] [name="displayType"]').on('click',function(){
    		for (var i = 0; i < data.length; i++){
    jdata = data[i].value;  
    jdata.forEach(function(valueObj){   
      paValueExtent[i] = d3.extent(jdata,function(d){
        return d['num'];  
      });
    }); 
    rect = heatmap.selectAll('rect[i]') 
    .data(jdata).enter()
      .append('rect')
      .attr('width',cellSize)
      .attr('height',cellSize)
      .attr('x', function(d){
        return (d['year'] - yearOffset) * itemSize;
      })
      .attr('y', itemSize * i)
      .attr('fill','#ffffff');
      renderColor(i, paValueExtent);
    };
    }); 

    for (var i = 0; i < data.length; i++){
    jdata = data[i].value;  
    jdata.forEach(function(valueObj){   
      paValueExtent[i] = d3.extent(jdata,function(d){
        return d['num'];  
      });
    }); 
    rect = heatmap.selectAll('rect[i]') 
    .data(jdata).enter()
      .append('rect')
      .attr('width',cellSize)
      .attr('height',cellSize)
      .attr('x', function(d){
        return (d['year'] - yearOffset) * itemSize;
      })
      .attr('y', itemSize * i)
      .attr('fill','#ffffff');
      renderColor(i, paValueExtent);
    };

    
    initCalibration(paValueExtent);



    journum = i;
    
    // rect.filter(function(d){ return d.value[i].num>0;})
    //   .append('title')
    //   .text(function(d){
    //     return d.value[i].year+' '+d.value[i].num;
    //   });

    
    axisHeight = itemSize * journum;

    //render axises
    xAxis.scale(xAxisScale.range([0,axisWidth]).domain([yearExtent[0],yearExtent[1]]));  
    svg.append('g')
      .attr('transform','translate('+margin.left+','+margin.top+')')
      .attr('class','x axis')
      .call(xAxis)
    .append('text')
      .text('time')
      .attr('transform','translate('+axisWidth+',-10)');

    yAxis.scale(yAxisScale.range([0,axisHeight]).domain([1,journum])); 
    svg.append('g')
      .attr('transform','translate('+margin.left+','+margin.top+')')
      .attr('class','y axis');

    for (j=0; j<20; j++){
      d3.select('g')
    .append('text')
      .text(data[j].name)
      .attr('y', 16+ 24 * j)
      .attr('x', -180 );
    }
    
      
  });








  function initCalibration(paValueExtent){
    d3.select('[role="calibration"] [role="example"]').select('svg')
      .selectAll('rect').data(colorCalibration).enter()
    .append('rect')
      .attr('width',cellSize)
      .attr('height',cellSize)
      .attr('x',function(d,i){
        return i*itemSize;
      })
      .attr('fill',function(d){
        return d;
      });

  }

  function renderColor(i,paValueExtent){
    var renderByCount = document.getElementsByName('displayType')[0].checked;
    rect
      .filter(function(d){
        return (d['num']>=0);
      })
      .transition()
      .delay(function(d){      
        return (d['year']-yearOffset)*15;
      })
      .duration(500)
      .attrTween('fill',function(d,k,a){
        //choose color dynamicly      
        var colorIndex = d3.scale.quantize()
          .range([0,1,2,3,4,5,6,7])
          .domain((renderByCount?countData:paValueExtent[i]));

        return d3.interpolate(a,colorCalibration[colorIndex(d['num'])]);
      });
  }
  
  //extend frame height in `http://bl.ocks.org/`
  d3.select(self.frameElement).style("height", "600px");  
})();