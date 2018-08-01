/**
 * Created by fox on 8/31/16.
 */
var weight_pie=$("#basic_pie").width()
    var pie = new d3pie("journal_pie", {
        "header": {
            "title": {
                "text": "Journal",
                "fontSize": 24,
                "font": "open sans"
            },
            "subtitle": {
                "color": "#999999",
                "fontSize": 12,
                "font": "open sans"
            },
            "location": "pie-center",
            "titleSubtitlePadding": 9
        },
        "footer": {
            "color": "#999999",
            "fontSize": 10,
            "font": "open sans",
            "location": "bottom-left"
        },
        "size": {
            "canvasWidth": weight_pie,
            "pieInnerRadius": "45%",
            "pieOuterRadius": "91%"
        },
        "data": {
            "sortOrder": "value-desc",
            "content": 
                {!! $journalresult !!}                   
            
        },
        "labels": {
            "inner": {
                "hideWhenLessThanPercentage": 2.5
            },
            "mainLabel": {
                "fontSize": 14
            },
            "percentage": {
                "color": "#ffffff",
                "fontSize": 14,
                "decimalPlaces": 0
            },
            "value": {
                "color": "#adadad"
            },
            "lines": {
                "enabled": true
            },
            "truncation": {
                "enabled": true
            }
        },
        "effects": {
            "pullOutSegmentOnClick": {
                "effect": "back",
                "speed": 400,
                "size": 8
            }
        },
        "misc": {
            "gradient": {
                "enabled": true,
                "percentage": 100
            }
        }
    });

    var pie = new d3pie("year_pie", {
        "header": {
            "title": {
                "text": "Year",
                "fontSize": 24,
                "font": "open sans"
            },
            "subtitle": {
                "color": "#999999",
                "fontSize": 12,
                "font": "open sans"
            },
            "location": "pie-center",
            "titleSubtitlePadding": 9
        },
        "footer": {
            "color": "#999999",
            "fontSize": 10,
            "font": "open sans",
            "location": "bottom-left"
        },
        "size": {
            "canvasWidth": weight_pie,
            "pieInnerRadius": "45%",
            "pieOuterRadius": "91%"
        },
        "data": {
            "sortOrder": "value-desc",
            "content":
              {!! $yearresult !!} 
           
        },
        "labels": {
            "inner": {
                "hideWhenLessThanPercentage": 3
            },
            "mainLabel": {
                "fontSize": 14
            },
            "percentage": {
                "color": "#ffffff",
                "fontSize": 14,
                "decimalPlaces": 0
            },
            "value": {
                "color": "#adadad"
            },
            "lines": {
                "enabled": true
            },
            "truncation": {
                "enabled": true
            }
        },
        "effects": {
            "pullOutSegmentOnClick": {
                "effect": "back",
                "speed": 400,
                "size": 8
            }
        },
        "misc": {
            "gradient": {
                "enabled": true,
                "percentage": 100
            }
        }
    });

    var pie = new d3pie("country_pie", {
        "header": {
            "title": {
                "text": "Country",
                "fontSize": 24,
                "font": "open sans"
            },
            "subtitle": {
                "color": "#999999",
                "fontSize": 12,
                "font": "open sans"
            },
            "location": "pie-center",
            "titleSubtitlePadding": 9
        },
        "footer": {
            "color": "#999999",
            "fontSize": 10,
            "font": "open sans",
            "location": "bottom-left"
        },
        "size": {
            "canvasWidth": weight_pie,
            "pieInnerRadius": "45%",
            "pieOuterRadius": "91%"
        },
        "data": {
            "sortOrder": "value-desc",
            "content": 
            {!! $countryresult !!}
        },
        "labels": {
            "inner": {
                "hideWhenLessThanPercentage": 3
            },
            "mainLabel": {
                "fontSize": 14
            },
            "percentage": {
                "color": "#ffffff",
                "fontSize": 14,
                "decimalPlaces": 0
            },
            "value": {
                "color": "#adadad"
            },
            "lines": {
                "enabled": true
            },
            "truncation": {
                "enabled": true
            }
        },
        "effects": {
            "pullOutSegmentOnClick": {
                "effect": "back",
                "speed": 400,
                "size": 8
            }
        },
        "misc": {
            "gradient": {
                "enabled": true,
                "percentage": 100
            }
        }
    });

var pie = new d3pie("tool_pie", {
    "header": {
        "title": {
            "text": "TOP 10 Cited",
            "fontSize": 24,
            "font": "open sans"
        },
        "subtitle": {
            "text":"Within DaTo Database",
            "color": "#999999",
            "fontSize": 12,
            "font": "open sans"
        },
        "location": "pie-center",
        "titleSubtitlePadding": 9
    },
    "footer": {
        "color": "#999999",
        "fontSize": 10,
        "font": "open sans",
        "location": "bottom-left"
    },
    "size": {
        "canvasWidth": weight_pie,
        "pieInnerRadius": "45%",
        "pieOuterRadius": "91%"
    },
    "data": {
        "sortOrder": "value-desc",
        "content": [
            {
                "label": "Bowtie",
                "value": 294,
                "color": "#2081c1"
            },
            {
                "label": "BLAT",
                "value": 280,
                "color": "#e98125"
            },
            {
                "label": "SCOP",
                "value": 265,
                "color": "#a05c56"
            },
            {
                "label": "genome browser",
                "value": 242,
                "color": "#6ada6a"
            },
            {
                "label": "dbSNP",
                "value": 229,
                "color": "#634a22"
            },
            {
                "label": "SWISS-PROT",
                "value": 201,
                "color": "#7b6688"
            },
            {
                "label": "KEGG",
                "value": 172,
                "color": "#d0743c"
            },
            {
                "label": "Pfam",
                "value": 165,
                "color": "#d8d138"
            },
            {
                "label": "RefSeq",
                "value": 158,
                "color": "#961818"
            },
            {
                "label": "GO",
                "value": 152,
                "color": "#64a61f"
            }
        ]
    },
    "labels": {
        "inner": {
            "hideWhenLessThanPercentage": 3
        },
        "mainLabel": {
            "fontSize": 14
        },
        "percentage": {
            "color": "#ffffff",
            "fontSize": 14,
            "decimalPlaces": 0
        },
        "value": {
            "color": "#adadad"
        },
        "lines": {
            "enabled": true
        },
        "truncation": {
            "enabled": true
        }
    },
    "effects": {
        "pullOutSegmentOnClick": {
            "effect": "back",
            "speed": 400,
            "size": 8
        }
    },
    "misc": {
        "gradient": {
            "enabled": true,
            "percentage": 100
        }
    }
});

