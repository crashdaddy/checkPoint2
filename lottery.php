<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title></title>
<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="..\/js\/vendor\/1.7.2.jquery.min.js"><\/script>')</script>
        
<!-- <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<style>
@font-face {
        font-family: Montserrat;
        src: url("css/Montserrat-Regular.otf") format("opentype");
}

body {
    background-image: url('img/lottobg.jpg');
    font-family: Montserrat;
}
#textDiv {
    width:55%;
    float:left;
    margin-left:6px;
    height:2200px;
    margin-top:20px;
    /* background-color: aliceblue; */
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    text-align:center;
    margin-bottom:100px;
    background: rgb(240,250,7);
    background: linear-gradient(90deg, rgba(240,250,7,1) 0%, rgba(232,183,20,1) 48%, rgba(245,255,0,1) 100%);
}
#historyDiv {
    width:100%;
    float:left;
    /* margin-top:30px; */
    height:500px;
    overflow:scroll;
    background-color: aliceblue;
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    text-align:center;
}

#avgDiv, #lastPickDiv, #sumDiv, #diffDiv {
    width:100%;
    float:left;
    margin-top:30px;
    background-color: aliceblue;
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    text-align:center;
    /* margin-bottom:50px; */
}

#controlsDiv {
    /* margin-top:20px; */
    background-color: aliceblue;
    /* margin-right:20px; */
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    padding-bottom:20px;
    text-align:center;
    margin-bottom:30px;
    /* background: rgb(240,250,7);
    background: linear-gradient(90deg, rgba(240,250,7,1) 0%, rgba(232,183,20,1) 48%, rgba(245,255,0,1) 100%); */
}

#recentDiv {
    /* margin-top:20px; */
    background-color: aliceblue;
    /* margin-right:20px; */
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    padding-bottom:20px;
    text-align:center;
    margin-bottom:30px;
    /* background: rgb(240,250,7);
    background: linear-gradient(90deg, rgba(240,250,7,1) 0%, rgba(232,183,20,1) 48%, rgba(245,255,0,1) 100%); */
}

#chartDiv {
    margin-top:20px;
    background-color: aliceblue;
    margin-right:20px;
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    padding-bottom:20px;
    text-align:center;
    margin-bottom:30px;
}

#instructionsDiv {
    margin-top:20px;
    background-color: aliceblue;
    margin-right:20px;
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
}

.lotto {
    background-image: url('img/lottoBall.png');
    background-size: 100% 100%;
    width:40px;
    height:40px;
    margin-left:auto;
    margin-right:auto;
    text-align:center;
    vertical-align: middle;
    display:inline-block;
    line-height:40px;
}

.lottoSpan {
    width:40px;
    height:40px;
    margin-left:auto;
    margin-right:auto;
    text-align:center;
}

.mega {
    background-image: url('img/megaBall.png');
    background-size: 100% 100%;
    width:40px;
    height:40px;
    margin-left:auto;
    margin-right:auto;
    text-align:center;
    vertical-align: middle;
    display:inline-block;
    line-height:40px;
}

span {
font-family: Montserrat, Geneva, sans-serif;
font-size: 14px;
letter-spacing: 1px;
word-spacing: 2px;
color: black;
font-weight: 900;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: none;
display:inline-block;
}

.coolButton {
   background: #3D94F6;
   background-image: -webkit-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -moz-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -ms-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -o-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: linear-gradient(to bottom, #3D94F6, #1E62D0);
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   color: #FFAE00;
   font-family: Montserrat;
   font-size: 26px;
   font-weight: 700;
   padding: 14px;
   box-shadow: 3px 4px 10px 0px #000000;
   -webkit-box-shadow: 3px 4px 10px 0px #000000;
   -moz-box-shadow: 3px 4px 10px 0px #000000;
   text-shadow: 4px 3px 3px #000000;
   border: solid #FFFFFF 1px;
   text-decoration: none;
   display: inline-block;
   cursor: pointer;
   text-align: center;
   /* width:250px; */
}

.coolButton:hover {
   border: solid #337FED 1px;
   background: #1E62D0;
   background-image: -webkit-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -moz-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -ms-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -o-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: linear-gradient(to bottom, #1E62D0, #3D94F6);
   -webkit-border-radius: 10px;
   -moz-border-radius: 10px;
   border-radius: 10px;
   text-decoration: none;
}

.headerDiv {
    background: rgb(52,138,241);
    background: linear-gradient(90deg, rgba(52,138,241,1) 4%, rgba(0,168,255,1) 33%, rgba(20,70,232,1) 85%);
    width:100%;
    border:1px solid black;
    /* background-color:lightblue; */
    color:white;
    font-size:24px;
    text-align:center;
    font-family:Montserrat;
    font-weight:bold;
}

.rightSide {
    width:40%;
    float:right;
}

@media (max-width: 600px) {
    #textDiv {
    width:90%;
    float:left;
    margin-left:6px;
    height:1500px;
    margin-top:20px;
    /* background-color: aliceblue; */
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    text-align:center;
    margin-bottom:100px;
    background: rgb(240,250,7);
    background: linear-gradient(90deg, rgba(240,250,7,1) 0%, rgba(232,183,20,1) 48%, rgba(245,255,0,1) 100%);
}

#lastPickDiv {
    margin-top:30px;
    margin-bottom:30px;
    background-color: aliceblue;
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
    text-align:center;
    /* margin-bottom:50px; */

}

#instructionsDiv {
    margin-top:60px;
    background-color: aliceblue;
    box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);
}

.rightSide {
    clear:both;
    width:90%;
    margin-top:20px;
}

.lotto {
    background-image: url('img/lottoBall.png');
    background-size: 100% 100%;
    width:20px;
    height:20px;
    margin-left:auto;
    margin-right:auto;
    text-align:center;
    vertical-align: middle;
    display:inline-block;
    line-height:20px;
}

.lottoSpan {
    width:20px;
    height:20px;
    margin-left:auto;
    margin-right:auto;
    text-align:center;
}

.mega {
    background-image: url('img/megaBall.png');
    background-size: 100% 100%;
    width:20px;
    height:20px;
    margin-left:auto;
    margin-right:auto;
    text-align:center;
    vertical-align: middle;
    display:inline-block;
    line-height:20px;
}


.coolButton {
   background: #3D94F6;
   background-image: -webkit-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -moz-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -ms-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: -o-linear-gradient(top, #3D94F6, #1E62D0);
   background-image: linear-gradient(to bottom, #3D94F6, #1E62D0);
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   color: #FFAE00;
   font-family: Montserrat;
   font-size: 12px;
   font-weight: 700;
   padding: 4px;
   box-shadow: 3px 4px 10px 0px #000000;
   -webkit-box-shadow: 3px 4px 10px 0px #000000;
   -moz-box-shadow: 3px 4px 10px 0px #000000;
   text-shadow: 4px 3px 3px #000000;
   border: solid #FFFFFF 1px;
   text-decoration: none;
   display: inline-block;
   cursor: pointer;
   text-align: center;
   /* width:250px; */
}

.coolButton:hover {
   border: solid #337FED 1px;
   background: #1E62D0;
   background-image: -webkit-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -moz-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -ms-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: -o-linear-gradient(top, #1E62D0, #3D94F6);
   background-image: linear-gradient(to bottom, #1E62D0, #3D94F6);
   -webkit-border-radius: 10px;
   -moz-border-radius: 10px;
   border-radius: 10px;
   text-decoration: none;
}

}

</style>
<script type="text/javascript">
var jsonData;
var avgArray=[];
var sumArray = [];
var freqArray = [];
var diffArray = [];

        $(document).ready(function () {

            $('#instructionsDiv').click(function() {
            $('#instructions').toggle("slide");
            if ($("#toggle").html()==="<sup>(+)</sup>") {
                $("#toggle").html("<sup>(-)</sup>");
            } else $("#toggle").html("<sup>(+)</sup>");
            });

            $('#primeDiv').click(function() {
            $('#primes').toggle("slide");
            if ($("#primeToggle").html()==="<sup>(+)</sup>") {
                $("#primeToggle").html("<sup>(-)</sup>");
            } else $("#primeToggle").html("<sup>(+)</sup>");
            });
            
            $.getJSON("lotteryAPI.php", function (result) {
			//var datapoints = [];
            jsonData = result;
            showHistory();
            primePrimer();

            var data = [];
            var sumData = [];
            var diffData = [];
            var diffDataSeries = {type: "line"};
            var sumDataSeries = {type: "line"};
            var dataSeries = { type: "line" };
            
            diffDataSeries.dataPoints = diffArray;
            sumDataSeries.dataPoints = sumArray;
            dataSeries.dataPoints = avgArray;
            diffData.push(diffDataSeries);
            sumData.push(sumDataSeries);
            data.push(dataSeries);
            
            var options = {
                zoomEnabled: true,
                animationEnabled: true,
                // title: {
                // text: "Averagization"
                // },
                axisY: {
                includeZero: false,
                lineThickness: 1
                },
                data: data  
            };

            var sumOptions = {
                zoomEnabled: true,
                animationEnabled: true,
                // title: {
                // text: "Averagization"
                // },
                axisY: {
                includeZero: false,
                lineThickness: 1
                },
                data: sumData  
            };

            var diffOptions = {
                zoomEnabled: true,
                animationEnabled: true,
                // title: {
                // text: "Averagization"
                // },
                axisY: {
                includeZero: false,
                lineThickness: 1
                },
                data: diffData  
            };

            var chart = new CanvasJS.Chart("chartContainer", options);
            chart.render();

            var sumChart = new CanvasJS.Chart("sumchartContainer", sumOptions);
            sumChart.render();

            var diffChart = new CanvasJS.Chart("diffchartContainer", diffOptions);
            diffChart.render();

            var freqChart = new CanvasJS.Chart("freqChartContainer", {
            animationEnabled: true,

            title:{
            text:"Numerological Prolifency"
            },
            toolTip:{
            content:"Ball# {label} has been drawn {y} times." ,
            },
            axisX:{
            interval: 1
            },
            axisY2:{
            interlacedColor: "lightblue",
            gridColor: "rgba(1,77,101,.1)"
            //title: "Prolifency"
            },
            data: [{
            type: "bar",
            name: "draws",
            axisYType: "secondary",
            color: "#3D94F6",
            dataPoints: freqArray
            }]
            });
            freqChart.render();

            var lastPickArray = [];
            var lastDate;
            for (let ballNum=1;ballNum<71;ballNum++){
            
            for (var index = jsonData.length-1 ; index >= 0; index--) {
            if (jsonData[index].firstBall == ballNum || jsonData[index].secondBall == ballNum ||
            jsonData[index].thirdBall == ballNum || jsonData[index].fourthBall == ballNum ||
            jsonData[index].fifthBall == ballNum) {
            lastDate =jsonData[index].date;
            break;
            }
           
            }
            var colColor;
            var dateDiff = Date.now() - new Date(lastDate);
            var daysDiff = Math.round(dateDiff/(1000 * 3600 * 24))-1;
            if (daysDiff>100) {colColor="red";} else if (daysDiff > 60 && daysDiff <=100) {colColor="orange";} else colColor="blue";
            lastPickArray.push({x: ballNum, y: daysDiff, label: ballNum, color: colColor})
            
            }       

                var lastPickChart = new CanvasJS.Chart("lastPickChartContainer",
                {
                title:{
                text: "Days Since Last Pick"
                },
                toolTip:{
                content:"Ball# {x} was last drawn {y} days ago." ,
                },
                
                data: [{
                color: "lightblue",
                
                dataPoints: lastPickArray
                }
                ]
                });

                lastPickChart.render();
            });
					
        });

        function primePrimer() {
            let primeText = "";

            for (let i = 1;i<76;i++){
                if (isPrime(i)) {
                    primeText += `<span style="color:blue" onmouseover="javascript:
                    document.getElementById('primeOutput').innerHTML='${i} is prime'" 
                    onmouseout = "javascript: document.getElementById('primeOutput').innerHTML='&nbsp;'">${i}</span> `;
                } else primeText += `<span onmouseover="javascript:
                    document.getElementById('primeOutput').innerHTML='${i} is not prime'" 
                    onmouseout = "javascript: document.getElementById('primeOutput').innerHTML='&nbsp;'">${i}</span> `;
                if (i%15===0){
                    primeText+= "<br/>";
                }
            } 
            document.getElementById("primes").innerHTML = primeText;
        }

       
        function showHistory() {
            var ballsHTML = "";
            var spanHTML;
            freqArray = [];
            sumArray = [];
            diffArray = [];
            for (var i = 1;i<76;i++){
                freqArray.push({label: i,y : 0 });
            }
            
            /* loop through array */
            $.each(jsonData,function(index, value){
            //datapoints.push({x: new Date(value['x']), y: parseInt(value['y'])});
            var ball1 = parseInt(value['firstBall']);
            var ball2 = parseInt(value['secondBall']);
            var ball3 = parseInt(value['thirdBall'])
            var ball4 = parseInt(value['fourthBall']);
            var ball5 = parseInt(value['fifthBall']);
            var megaBall = parseInt(value['megaBall']);

            const lottoResults = [ball1,
            ball2,
            ball3,
            ball4,
            ball5,
            megaBall];

            ball1--;
            ball2--;
            ball3--;
            ball4--;
            ball5--;

            freqArray[ball1].y++;
            freqArray[ball2].y++;
            freqArray[ball3].y++;
            freqArray[ball4].y++;
            freqArray[ball5].y++;
            freqArray[parseInt(value['megaBall'])-1].freq++;

            let ballSum = lottoResults.reduce((a, b) => a + b, 0);
            sumArray.push({x: new Date(value['date']), y: ballSum});
            let ballAvg = Math.round(ballSum/6);
            avgArray.push({x: new Date(value['date']), y: ballAvg});
            let ballMin = Math.min(...lottoResults);
           
            let ballMax = Math.max(...lottoResults);

            let ballDiff = ballMax - ballMin;
            diffArray.push({x: new Date(value['date']), y: ballDiff});

            ballsHTML+='<div style="display:inline-block;width:75px;height:40px;line-height:40px;vertical-align:middle;font-family:Montserrat;font-size:10pt;">'+value['date'] + '</div>';
            ballsHTML+='<div class = "lotto"><span class="lottoSpan" onclick="highlightBalls(event)">' +value['firstBall']+'</span></div>';
            ballsHTML+='<div class = "lotto"><span class="lottoSpan" onclick="highlightBalls(event)">' +value['secondBall']+'</span></div>';
            ballsHTML+='<div class = "lotto"><span class="lottoSpan" onclick="highlightBalls(event)">' +value['thirdBall']+'</span></div>';
            ballsHTML+='<div class = "lotto"><span class="lottoSpan" onclick="highlightBalls(event)">' +value['fourthBall']+'</span></div>';
            ballsHTML+='<div class = "lotto"><span class="lottoSpan" onclick="highlightBalls(event)">' +value['fifthBall']+'</span></div>';
            ballsHTML+='<div class = "mega"><span class="lottoSpan" onclick="highlightBalls(event)">' +value['megaBall']+'</span></div>';
            ballsHTML+='<div style="display:inline-block;width:146px;font-family:Montserrat;font-size:10pt;"> &#8721;: '+ballSum+' - x&#772;: ' + ballAvg + ' - &#8783;: ' + ballDiff + '</div>';
            ballsHTML+='<br/>';
		    });

            $("#historyDiv").html(ballsHTML);
        }

        function clearBalls() {
            $('#historyDiv div > span').each(function() {
                $(this).css("background-color","");
                $(this).css("opacity","1");
            });
        }

        function highlightBalls(event) {
            event = event || window.event; // IE
            var target = event.target || event.srcElement; // IE

            var ballNum = target.innerHTML;

            $('#historyDiv div > span').each(function() {
                
                if ($(this).html()==ballNum) {
                    $(this).css("background-color","#FF7E00");
                    $(this).css("opacity",".5");
                }else {
                if (!($("#multipleSelections").is(":checked"))){
                $(this).css("background-color","");
                $(this).css("opacity","1");
                }
            }

            var lastDate;
            for (var index = jsonData.length-1 ; index >= 0; index--) {
            if (jsonData[index].firstBall == ballNum || jsonData[index].secondBall == ballNum ||
            jsonData[index].thirdBall == ballNum || jsonData[index].fourthBall == ballNum ||
            jsonData[index].fifthBall == ballNum) {
            lastDate =jsonData[index].date;
            break;
            }
            }
            
            var dateDiff = Date.now() - new Date(lastDate);
            var daysDiff = Math.round(dateDiff/(1000 * 3600 * 24))-1;
            var dayStr;
            if (daysDiff===1) {dayStr=" yesterday";} else if (daysDiff === 0) {dayStr = " today";} else {dayStr= daysDiff+ " days ago";}
            $("#recency").html("<br/>The number " + ballNum + " was last picked " + dayStr + " on " + lastDate); 
        });
        }

        function showOdds() {
            $('#historyDiv div > span').each(function() {
            if (parseInt($(this).html())%2!=0) {
         //   $(this).css("background-image","url('img/megaBall.gif')");
            $(this).css("background-color","#FF7E00");
            $(this).css("opacity",".5");
            } else {
                if (!($("#multipleSelections").is(":checked"))){
                $(this).css("background-color","");
                $(this).css("opacity","1");
                }
            }
        });
        }

        function showEvens() {
            $('#historyDiv div > span').each(function() {
            if (parseInt($(this).html())%2===0) {
         //   $(this).css("background-image","url('img/megaBall.gif')");
            $(this).css("background-color","#FF7E00");
            $(this).css("opacity",".5");
            }else {
                if (!($("#multipleSelections").is(":checked"))){
                $(this).css("background-color","");
                $(this).css("opacity","1");
                }
            }
            });
        }

        function isPrime(n) {
        for (var i = 2; i < n; i++) { 
        if(n % i === 0) return false;
        }
        return n > 1; 
        }

        function showPrimes() {
            $('#historyDiv div > span').each(function() {
            if (isPrime(parseInt($(this).html()))) {
         //  $(this).css("background-image","url('img/megaBall.gif')");
            $(this).css("background-color","#FF7E00");
            $(this).css("opacity",".5");
            }else {
                if (!($("#multipleSelections").is(":checked"))){
                $(this).css("background-color","");
                $(this).css("opacity","1");
                }
            }
            });
        }
        
</script>
</head>
<body>
<div>
    <div style="width:90%;margin-left:auto;margin-right:auto;margin-bottom:30px;background-color:none;">
        <div style="width:100%;margin-left:auto;margin-right:auto;text-align:center;"><img src="img/lottoLab.jpg" style="max-width:100%;border:1px solid black;"/></div>
        <div id="textDiv">
        <div id="recentDiv">
        <div class="headerDiv">
        Recentometer
        </div>
        <div id="recency"><br/>Click on any ball to find out the last time that number was drawn.</div>
        </div>
        <div class="headerDiv">
        Historyonix
        </div>
        <div id="historyDiv"></div>
        <div id="controlsDiv">
        <div class="headerDiv">
        Clusterizer
        </div>
        <br/>
        <button onclick="showOdds();" class="coolButton">Odds</button>
        
        <button onclick="showEvens();" class="coolButton">Evens</button>
        
        <button onclick="showPrimes();" class="coolButton">Primes</button>
        
        <button onclick="clearBalls();" class="coolButton">Clear</button>
       
        <br/><br/><input type="checkbox" id="multipleSelections">Multiselectability<br>
        <br/>
        <div id="primeDiv">Prime Primer <span id="primeToggle"><sup>(+)</sup></span></div>
        <div id="primes" style="display:none;"></div>
        <div id="primeOutput">&nbsp;</div>
        </div>
        <div id="avgDiv">
        <div class="headerDiv">
        Averagocity
        </div>
        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
        </div>
        <div id="sumDiv">
        <div class="headerDiv">
        Summerizer
        </div>
        <div id="sumchartContainer" style="height: 300px; width: 100%;"></div>
        </div>
        <div id="diffDiv">
        <div class="headerDiv">
        Differencer
        </div>
        <div id="diffchartContainer" style="height: 300px; width: 100%;"></div>
        </div>
        <div id="lastPickDiv">
        <div class="headerDiv">
        WayBack Machine
        </div>
        <div id="lastPickChartContainer" style="height: 300px; width: 100%;"></div>
        </div>
        </div>
        <div id="instructionsDiv" class="rightSide">
        <div class="headerDiv">
        Instructionals <span id="toggle"><sup>(+)</sup></span>
        </div>
        <div id="instructions" style="padding:6px;display:none;width:100%, text-align:left;font-family:Montserrat;font-size:10pt;margin-top:20px;margin-bottom:20px;">
        On the "Historyonix" panel you will find the historical records from all MegaMillions lotto drawings since the game began in 2002.<br>
        <br/>The results are listed by dates, then each lotto ball. The Mega Ball is the red one.<br/>
        <br/>Next to that, we have presented the following pieces of information:<br/>
        <br/>
        &#8721; - The sum of all the balls' values for that drawing.<br/>
        <br/>
        x&#772; - The average value of all the balls together (rounded).<br/>
        <br/>
        &#8783; - The difference between the smallest and the largest number drawn.<br/>
        <br/>
        Click on any of the balls to highlight every occurrence of that number in the Lotto history. You
        can check the "Multiselectability" checkbox below to be able to highlight several numbers
        at the same time.<br/>
        <br/>
        Using the tools below you can filter the data by highlighting all of the winning balls that were even, odd,
        or prime numbers.<br/>
        </div>
        </div> <!-- instructions -->


        <div id="chartDiv" class="rightSide">
        <div class="headerDiv">
        Frequencizer
        </div>
        <div id="freqChartContainer" style="height: 1200px; width: 100%;"></div>
        </div>
    </div>
	
</body>
</html>