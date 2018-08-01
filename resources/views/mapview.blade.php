/**
 * Created by fox on 9/1/16.
 */

var grid_width=$("#sta_container").width()
var COLORS = [

    '#009e0f',
    '#23912e',
    '#3d8244',
    '#537557',
    '#616661',
    '#6e6363',
    '#85605f',
    '#9c5554',
    '#cd2a27',
    "#f32925"


];

var indicators = {
    amount: {
        min: 0,
        max: 10000
    },
    ingood: {
        min: 0,
        max: 10000
    },
    inbad: {
        min: 0,
        max: 3000
    },
    growthRate: {
        min: -1,
        max:1
    },
    lastyear: {
        min: -60,
        max: 700
    },
    percitation: {
        min: -14.59,
        max: 7
    }
};

function getColor(value, indicator){
    var indicator = indicators[indicator],
        max = indicator.max,
        min = indicator.min,
        step = (parseFloat((max - min).toFixed(4)))/COLORS.length,
        cursor = min,
        i = 0;

    for(;cursor <= max;i++){
        if( value >= cursor && value <= parseFloat((cursor + step).toFixed(4))){
            return COLORS[i];
        }
        cursor = parseFloat((cursor + step).toFixed(4))
    }
}

FancyGrid.defineTheme('economy', {
    extend: 'default',
    config: {
        panelBorderWidth: 1
    }
});

// var data = [["CH",251,204,47,0.247750128712409,3],["NL",452,230,222,0.357553399895148,1],["TH",29,23,6,0.345987073739658,2],["KR",314,201,113,0.402420380920843,1],["SE",191,143,48,0.307587579222901,2],["EE",27,27,0,0.316074012952492,1],["IN",499,378,121,0.376610905414139,3],["ES",499,404,95,0.328580085512993,3],["SI",27,25,2,0.265436243181654,1],["BE",195,142,53,0.31986082120209,1],["RU",153,109,44,0.224401826715583,4],["FI",146,119,27,0.25675006889954,3],["SG",194,106,88,0.363253346145718,1],["JP",755,532,223,0.392827547057732,1],["NO",83,60,23,0.247251125806799,1],["TR",39,33,6,0.325530072716129,1],["CA",537,374,163,0.31392692458975,3],["HR",9,7,2,0.200936955176003,1],["DK",199,154,45,0.233350718301452,3],["DE",1702,1231,471,0.450601017610025,1],["IL",204,158,46,0.343732394135255,1],["BR",121,87,34,0.30529988079492,1],["AU",297,198,99,0.34941357956277,1],["FR",869,579,290,0.38023591096911,1],["PL",163,123,40,0.276954499409223,2],["LV",2,0,2,0.0650410894399627,1],["AT",361,313,48,0.363344599678634,1],["CN",1136,781,355,0.552248131390473,1],["US",8543,6045,2498,0.488966001898865,2],["IT",509,315,194,0.327494182280412,1],["CZ",58,40,18,0.253049483624406,1],["ZA",36,28,8,0.251033404859074,1],["IE",101,72,29,0.311901586555625,1],["TW",375,224,151,0.360523216595248,2],["HU",49,42,7,0.241365817015209,1],["GB",1415,1010,405,0.412654707171391,1],["HK",153,117,36,0.322427117261695,1],["GR",80,62,18,0.244699692196835,3],["NZ",32,15,17,0.200102719578103,1],["MX",32,18,14,0.166529039576117,2],["IR",25,15,10,0.339940319102839,1],["CL",13,7,6,0.218114043560768,1],["RO",10,6,4,0.178768634793587,1],["LT",9,9,0,0.221094623498656,1],["AR",26,22,4,0.311941426166497,1],["BG",19,10,9,0.177719502192359,1],["SA",38,33,5,0.255268049432557,1],["PT",60,41,19,0.291619083836961,1],["SK",5,5,0,0.379729661461215,1],["CU",4,2,2,0.0594630943592953,2],["KY",2,0,2,0.0650410894399627,1],["UA",1,1,0,0,1],["VG",1,1,0,0,1],["MQ",1,1,0,0,1],["RS",2,2,0,0.148698354997035,1],["CO",2,1,1,0.148698354997035,1],["MO",3,2,1,2,1],["LU",13,10,3,0.377980015136628,1],["AE",6,6,0,0.176903956242853,1],["PK",13,1,12,0.366109650946301,2],["MY",22,15,7,0.293804200309687,1],["EG",4,3,1,0.259921049894873,1],["IS",1,1,0,0,1],["GE",3,3,0,0.245730939615517,1],["PH",2,1,1,0.0717734625362931,1],["MK",4,3,1,0.0491150634216482,3],["CY",6,5,1,0.245730939615517,2],["VN",2,2,0,1,1],["MA",2,1,1,0.259921049894873,1],["BD",1,0,1,0,1],["KE",1,0,1,0,1],];
var data = [["Saudi Arabia",38,33,5,0.255,7,0.816],["Viet Nam",2,2,0,1.000,1,0.500],["Thailand",29,23,6,0.346,1,0.655],["Greece",80,62,18,0.245,5,2.200],["Pakistan",13,1,12,0.366,0,1.000],["Poland",163,123,40,0.277,19,1.890],["Martinique",1,1,0,0.000,0,1.000],["Israel",204,158,46,0.344,15,2.676],["Luxembourg",13,10,3,0.378,4,1.231],["Georgia",3,3,0,0.246,0,1.333],["Chile",13,7,6,0.218,1,1.077],["Russian Federation",153,109,44,0.224,10,1.399],["United States",8543,6045,2498,0.489,676,3.144],["Czech Republic",58,40,18,0.253,9,1.224],["Turkey",39,33,6,0.326,5,2.487],["Egypt",4,3,1,0.260,0,1.250],["Italy",509,315,194,0.327,49,1.646],["France",869,579,290,0.380,75,1.929],["Estonia",27,27,0,0.316,4,2.852],["Korea/ Republic of",314,201,113,0.402,29,1.475],["Singapore",194,106,88,0.363,7,1.789],["Taiwan/Province of China",375,224,151,0.361,29,2.096],["Bangladesh",1,0,1,0.000,0,4.000],["Germany",1702,1231,471,0.451,104,2.827],["Romania",10,6,4,0.179,1,0.600],["Cyprus",6,5,1,0.246,2,0.167],["Norway",83,60,23,0.247,8,2.904],["Netherlands",452,230,222,0.358,28,2.904],["Austria",361,313,48,0.363,39,1.604],["Malaysia",22,15,7,0.294,5,0.773],["Belgium",195,142,53,0.320,12,2.138],["Japan",755,532,223,0.393,34,3.135],["Mexico",32,18,14,0.167,1,6.188],["Croatia",9,7,2,0.201,0,2.000],["Spain",499,404,95,0.329,44,1.802],["United Kingdom",1415,1010,405,0.413,87,4.620],["Australia",297,198,99,0.349,21,1.869],["China",1136,781,355,0.552,139,2.023],["Hungary",49,42,7,0.241,6,3.531],["Philippines",2,1,1,0.072,0,1.000],["Sweden",191,143,48,0.308,13,2.675],["Bulgaria",19,10,9,0.178,0,1.368],["Slovenia",27,25,2,0.265,3,0.852],["Ukraine",1,1,0,0.000,0,4.000],["Slovakia",5,5,0,0.380,1,0.400],["Ireland",101,72,29,0.312,7,1.842],["Switzerland",251,204,47,0.248,16,4.629],["Denmark",199,154,45,0.233,13,3.905],["Finland",146,119,27,0.257,5,1.651],["Canada",537,374,163,0.314,35,4.043],["Brazil",121,87,34,0.305,11,0.926],["Portugal",60,41,19,0.292,4,1.033],["Hong Kong",153,117,36,0.322,16,1.621],["New Zealand",32,15,17,0.200,0,1.750],["Iran/ Islamic Republic of",25,15,10,0.340,4,0.400],["Argentina",26,22,4,0.312,2,0.962],["South Africa",36,28,8,0.251,3,3.000],["Cuba",4,2,2,0.059,0,1.750],["India",499,378,121,0.377,49,1.760],["Lithuania",9,9,0,0.221,0,1.333],["United Arab Emirates",6,6,0,0.177,0,0.500]]
$(function(){
    // $('#map').highcharts('Map', {
    $('#world_map').highcharts('Map', {
        chart: {
            width:grid_width,
            backgroundColor: '#FFF',
            borderWidth: 1,
            borderColor: '#FFF'
        },
        title: false,
        legend: {
            enabled: false
        },
        colorAxis: {
            maxColor: '#009E0F',
            minColor: '#CD2A27'
        },
        series: [{
            name: 'tool or database ?',
            // data: [{"code":"US","value":2.39,"color":"#537557"},{"code":"CN","value":7.27,"color":"#009e0f"},{"code":"JP","value":-0.1,"color":"#6e6363"},{"code":"DE","value":1.6,"color":"#616661"},{"code":"GB","value":2.94,"color":"#537557"},{"code":"FR","value":0.18,"color":"#6e6363"},{"code":"BR","value":0.14,"color":"#6e6363"},{"code":"IT","value":-0.44,"color":"#6e6363"},{"code":"IN","value":7.29,"color":"#009e0f"},{"code":"RU","value":0.64,"color":"#616661"},{"code":"CA","value":2.44,"color":"#537557"},{"code":"AU","value":2.5,"color":"#537557"},{"code":"KR","value":3.31,"color":"#537557"},{"code":"ES","value":1.36,"color":"#616661"},{"code":"MX","value":2.23,"color":"#537557"},{"code":"ID","value":5.02,"color":"#23912e"},{"code":"NL","value":1.01,"color":"#616661"},{"code":"TR","value":2.91,"color":"#537557"},{"code":"SA","value":3.47,"color":"#3d8244"},{"code":"CH","value":1.89,"color":"#616661"},{"code":"SE","value":2.33,"color":"#537557"},{"code":"NG","value":6.31,"color":"#23912e"},{"code":"PL","value":3.33,"color":"#537557"},{"code":"AR","value":0.45,"color":"#6e6363"},{"code":"BE","value":1.35,"color":"#616661"},{"code":"NO","value":2.21,"color":"#537557"},{"code":"AT","value":0.35,"color":"#6e6363"},{"code":"TH","value":0.87,"color":"#616661"},{"code":"AE","value":4.57,"color":"#3d8244"},{"code":"CO","value":4.55,"color":"#3d8244"},{"code":"ZA","value":1.52,"color":"#616661"}],
            // data: [{"code":"CH","value":1,"color":"#537557"},{"code":"NL","value":1,"color":"#537557"},{"code":"TH","value":1,"color":"#537557"},{"code":"KR","value":1,"color":"#537557"},{"code":"SE","value":1,"color":"#537557"},{"code":"EE","value":1,"color":"#537557"},{"code":"IN","value":1,"color":"#537557"},{"code":"ES","value":1,"color":"#537557"},{"code":"SI","value":1,"color":"#537557"},{"code":"BE","value":1,"color":"#537557"},{"code":"RU","value":1,"color":"#537557"},{"code":"FI","value":1,"color":"#537557"},{"code":"SG","value":1,"color":"#537557"},{"code":"JP","value":1,"color":"#537557"},{"code":"NO","value":1,"color":"#537557"},{"code":"TR","value":1,"color":"#537557"},{"code":"CA","value":1,"color":"#537557"},{"code":"HR","value":1,"color":"#537557"},{"code":"DK","value":1,"color":"#537557"},{"code":"DE","value":1,"color":"#537557"},{"code":"IL","value":1,"color":"#537557"},{"code":"BR","value":1,"color":"#537557"},{"code":"AU","value":1,"color":"#537557"},{"code":"FR","value":1,"color":"#537557"},{"code":"PL","value":1,"color":"#537557"},{"code":"LV","value":1,"color":"#537557"},{"code":"AT","value":1,"color":"#537557"},{"code":"CN","value":1,"color":"#537557"},{"code":"US","value":1,"color":"#537557"},{"code":"IT","value":1,"color":"#537557"},{"code":"CZ","value":1,"color":"#537557"},{"code":"ZA","value":1,"color":"#537557"},{"code":"IE","value":1,"color":"#537557"},{"code":"TW","value":1,"color":"#537557"},{"code":"HU","value":1,"color":"#537557"},{"code":"GB","value":1,"color":"#537557"},{"code":"HK","value":1,"color":"#537557"},{"code":"GR","value":1,"color":"#537557"},{"code":"NZ","value":1,"color":"#537557"},{"code":"MX","value":1,"color":"#537557"},{"code":"IR","value":1,"color":"#537557"},{"code":"CL","value":1,"color":"#537557"},{"code":"RO","value":1,"color":"#537557"},{"code":"LT","value":1,"color":"#537557"},{"code":"AR","value":1,"color":"#537557"},{"code":"BG","value":1,"color":"#537557"},{"code":"SA","value":1,"color":"#537557"},{"code":"PT","value":1,"color":"#537557"},{"code":"SK","value":1,"color":"#537557"},{"code":"CU","value":1,"color":"#537557"},{"code":"KY","value":1,"color":"#537557"},{"code":"UA","value":1,"color":"#537557"},{"code":"VG","value":1,"color":"#537557"},{"code":"MQ","value":1,"color":"#537557"},{"code":"RS","value":1,"color":"#537557"},{"code":"CO","value":1,"color":"#537557"},{"code":"MO","value":1,"color":"#537557"},{"code":"LU","value":1,"color":"#537557"},{"code":"AE","value":1,"color":"#537557"},{"code":"PK","value":1,"color":"#537557"},{"code":"MY","value":1,"color":"#537557"},{"code":"EG","value":1,"color":"#537557"},{"code":"IS","value":1,"color":"#537557"},{"code":"GE","value":1,"color":"#537557"},{"code":"PH","value":1,"color":"#537557"},{"code":"MK","value":1,"color":"#537557"},{"code":"CY","value":1,"color":"#537557"},{"code":"VN","value":1,"color":"#537557"},{"code":"MA","value":1,"color":"#537557"},{"code":"BD","value":1,"color":"#537557"},{"code":"KE","value":1,"color":"#537557"}],
            data:[{"code":"SA","value":1,"color":"#537557"},{"code":"VN","value":1,"color":"#537557"},{"code":"TH","value":1,"color":"#537557"},{"code":"GR","value":1,"color":"#537557"},{"code":"PK","value":1,"color":"#537557"},{"code":"PL","value":1,"color":"#537557"},{"code":"MQ","value":1,"color":"#537557"},{"code":"IL","value":1,"color":"#537557"},{"code":"LU","value":1,"color":"#537557"},{"code":"GE","value":1,"color":"#537557"},{"code":"CL","value":1,"color":"#537557"},{"code":"RU","value":1,"color":"#537557"},{"code":"US","value":1,"color":"#537557"},{"code":"CZ","value":1,"color":"#537557"},{"code":"TR","value":1,"color":"#537557"},{"code":"EG","value":1,"color":"#537557"},{"code":"IT","value":1,"color":"#537557"},{"code":"FR","value":1,"color":"#537557"},{"code":"EE","value":1,"color":"#537557"},{"code":"KR","value":1,"color":"#537557"},{"code":"SG","value":1,"color":"#537557"},{"code":"TW","value":1,"color":"#537557"},{"code":"BD","value":1,"color":"#537557"},{"code":"DE","value":1,"color":"#537557"},{"code":"RO","value":1,"color":"#537557"},{"code":"CY","value":1,"color":"#537557"},{"code":"NO","value":1,"color":"#537557"},{"code":"NL","value":1,"color":"#537557"},{"code":"AT","value":1,"color":"#537557"},{"code":"MY","value":1,"color":"#537557"},{"code":"BE","value":1,"color":"#537557"},{"code":"JP","value":1,"color":"#537557"},{"code":"MX","value":1,"color":"#537557"},{"code":"HR","value":1,"color":"#537557"},{"code":"ES","value":1,"color":"#537557"},{"code":"GB","value":1,"color":"#537557"},{"code":"AU","value":1,"color":"#537557"},{"code":"CN","value":1,"color":"#537557"},{"code":"HU","value":1,"color":"#537557"},{"code":"PH","value":1,"color":"#537557"},{"code":"SE","value":1,"color":"#537557"},{"code":"BG","value":1,"color":"#537557"},{"code":"SI","value":1,"color":"#537557"},{"code":"UA","value":1,"color":"#537557"},{"code":"SK","value":1,"color":"#537557"},{"code":"IE","value":1,"color":"#537557"},{"code":"CH","value":1,"color":"#537557"},{"code":"DK","value":1,"color":"#537557"},{"code":"FI","value":1,"color":"#537557"},{"code":"CA","value":1,"color":"#537557"},{"code":"BR","value":1,"color":"#537557"},{"code":"PT","value":1,"color":"#537557"},{"code":"HK","value":1,"color":"#537557"},{"code":"NZ","value":1,"color":"#537557"},{"code":"IR","value":1,"color":"#537557"},{"code":"AR","value":1,"color":"#537557"},{"code":"ZA","value":1,"color":"#537557"},{"code":"CU","value":1,"color":"#537557"},{"code":"IN","value":1,"color":"#537557"},{"code":"LT","value":1,"color":"#537557"},{"code":"AE","value":1,"color":"#537557"}],
            mapData: Highcharts.maps['custom/world'],
            joinBy: ['iso-a2', 'code'],
            animation: true,
            states: {
                hover: {
                    color: '#BADA55'
                }
            }
        }]
    });

    var numberRender = function(o){
        if (o.value < 0) {
            o.style = {
                color: '#E46B67'
            };
        }
        else if(Fancy.isNumber(o.value)){
            o.style = {
                color: '#65AE6E'
            };
        }

        o.value = o.value + '';

        return o;
    }

    new FancyGrid({
        title: 'DaTo distribution',
        renderTo: 'grid',
        theme: 'blue',
        width: grid_width,
        height: 300,
        trackOver: true,
        columnTrackOver: true,
        cellWrapper: true,
        selection: {
            column: true
        },
        data: {
            items: data,
            fields: ['country', 'amount', 'ingood', 'inbad', 'growthRate', 'lastyear', 'percitation']
        },
        columnClickData: true,
        events: [{
            columnclick: function(grid, params){
                if(params.column.index === 'country'){
                    return;
                }

                // var codes = ['US', 'CN', 'JP', 'DE', 'GB', 'FR', 'BR', 'IT', 'IN', 'RU', 'CA', 'AU', 'KR', 'ES', 'MX', 'ID', 'NL', 'TR', 'SA', 'CH', 'SE', 'NG', 'PL', 'AR', 'BE', 'NO', 'AT', 'TH', 'AE', 'CO', 'ZA'];
                // var codes = ['CH','NL','TH','KR','SE','EE','IN','ES','SI','BE','RU','FI','SG','JP','NO','TR','CA','HR','DK','DE','IL','BR','AU','FR','PL','LV','AT','CN','US','IT','CZ','ZA','IE','TW','HU','GB','HK','GR','NZ','MX','IR','CL','RO','LT','AR','BG','SA','PT','SK','CU','KY','UA','VG','MQ','RS','CO','MO','LU','AE','PK','MY','EG','IS','GE','PH','MK','CY','VN','MA','BD','KE']
                var codes = ["SA","VN","TH","GR","PK","PL","MQ","IL","LU","GE","CL","RU","US","CZ","TR","EG","IT","FR","EE","KR","SG","TW","BD","DE","RO","CY","NO","NL","AT","MY","BE","JP","MX","HR","ES","GB","AU","CN","HU","PH","SE","BG","SI","UA","SK","IE","CH","DK","FI","CA","BR","PT","HK","NZ","IR","AR","ZA","CU","IN","LT","AE"]
                var _data = [],
                    i = 0,
                    iL = codes.length;

                for(;i<iL;i++){
                    if(params.data[i] === '-'){
                        continue;
                    }

                    _data.push({
                        "code": codes[i],
                        "value": params.data[i],
                        color: getColor( params.data[i], params.column.index)
                    });
                }

                var valueSuffix = '',
                    valuePrefix = '';

                switch(params.column.index){
                    case 'amount':
                    case 'ingood':
                    case 'inbad':
                    case 'growthRate':
                    case 'lastyear':
                    case 'percitation':
                        valueSuffix = '';
                        break;
                }

                // $('#map').highcharts('Map', {
                $('#world_map').highcharts('Map', {
                    chart: {
                        backgroundColor: '#FFFFFF',
                        borderWidth: 1,
                        borderColor: '#FFFFFF'
                    },
                    title: false,
                    legend: {
                        enabled: false
                    },
                    tooltip: {
                        valuePrefix: valuePrefix,
                        valueSuffix: valueSuffix
                    },
                    series: [{
                        data: _data,
                        name: params.column.title,
                        mapData: Highcharts.maps['custom/world'],
                        joinBy: ['iso-a2', 'code'],
                        states: {
                            hover: {
                                color: '#BADA55'
                            }
                        }
                    }]
                });
            }
        }],
        defaults: {
            type: 'number',
            width: 130,
            resizable: true,
            sortable: true,
            align: 'center',
            cellAlign: 'center'
        },
        columns: [{
            title: 'Country',
            index: 'country',
            type: 'string',
            align: 'left',
            cellAlign: 'left'
        },{
            title: 'Amounts',
            index: 'amount',
            // width: 60,
            format: 'number'
        },{
            title: 'In Good',
            // width: 100,
            index: 'ingood',
            render: numberRender
        },{
            title: 'In Bad',
            index: 'inbad',
            // width: 140,
            render: numberRender
        },{
            title: 'Growth Rate',
            index: 'growthRate',
            render: numberRender
        },{
            title: 'Last Year',
            index: 'lastyear',
            render: numberRender
        },{
            title: 'Per citation',
            index: 'percitation',
            width: 125,
            render: numberRender
        }]
    });
});
