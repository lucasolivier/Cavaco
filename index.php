<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <!--Begin Style-->
        <link rel="stylesheet" href="style.css"/>
        <!--End Style-->
        <title>Compos.In</title>        
    </head>
    
    <body>
        <!--Side menu-->
        <nav id="side-menu">   
            <div id="logo">
                Compos.In
            </div>
            <div class="side-menu-but" onclick="openFile()">Open...</div>
            <input type="file" id="files" accept=".xml" />
            <!--<input type="text"></input>-->
        </nav>
        
        <!--General Content - Generated by PHP-->
        <section id="general-content">
            <nav id="score-menu"></nav>
            <div id="score-page">
                <!--<object id="svgPage" type="image/svg+xml" data="debug.svg" height="3700" width="1520">Error</object>-->
                <svg id="svgContainer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="1520" height="2000">

                </svg>
            </div>
        </section>
        <script src="xml2json/xml2json.js"></script>
        <script src="score/g-query.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="score/ScoreConverter.js"></script>
        <script src="ariajs/List.js"></script>
        <!--<script src="ariajs/Aria.js"></script>-->
        <script src="score/ScoreLoader.js"></script>
        <script src="score/ScoreElements.js"></script>
        <script src="score/ScoreBuilder/Chord.js"></script>
        <script src="score/ScoreBuilder/Measure.js"></script>
        <script src="score/ScoreBuilder/MeasureGroup.js"></script>
        <script src="score/ScoreBuilder/ScorePart.js"></script>
        <script src="score/ScoreBuilder/ScoreGroup.js"></script>
        <script src="score/ScoreBuilder/Score.js"></script>
        <!--<script src="score/ScoreBuilder.js"></script>-->
        <script src="debug.js"></script>
        <script>

            window.onload = function() {

                var debRect1 = $G.create("rect");
                debRect1.setAttribute("fill", "yellow");
                debRect1.setAttribute("height", 10);
                debRect1.setAttribute("width", 1000);
                debRect1.translate(10);
                svgContainer.appendChild(debRect1);

                    
                /*var measureObj1 = new ScoreBuilder.Measure(),
                    measureObj2 = new ScoreBuilder.Measure(),

                    chordObj1 = new ScoreBuilder.Chord(4),
                    chordObj2 = new ScoreBuilder.Chord(4),
                    chordObj3 = new ScoreBuilder.Chord(4),
                    chordObj4 = new ScoreBuilder.Chord(4),
                    chordObj5 = new ScoreBuilder.Chord(4),
                    chordObj6 = new ScoreBuilder.Chord(4),
                    chordObj7 = new ScoreBuilder.Chord(4),
                    chordObj8 = new ScoreBuilder.Chord(4);

                chordObj1.AddNote({n: 'A', o: 5});
                chordObj2.AddNote({n: 'C', o: 6, a: "flat"});
                chordObj3.AddNote({n: 'F', o: 5, a: "flat"});
                chordObj4.AddNote({n: 'G', o: 5});

                chordObj5.AddNote({n: 'A', o: 4, a: "flat"});
                chordObj6.AddNote({n: 'C', o: 5});
                chordObj7.AddNote({n: 'F', o: 4});
                chordObj8.AddNote({n: 'G', o: 4, a: "flat"});

                measureObj1.InsertElem(chordObj1);
                measureObj1.InsertElem(chordObj2);
                measureObj1.InsertElem(chordObj3);
                measureObj1.InsertElem(chordObj4);

                measureObj2.InsertElem(chordObj5);
                measureObj2.InsertElem(chordObj6);
                measureObj2.InsertElem(chordObj7);
                measureObj2.InsertElem(chordObj8);


                
                
                svgContainer.appendChild(measureObj1.Draw());
                svgContainer.appendChild(measureObj2.Draw());
                
                measureObj1.MoveTo(115.5, 150.5);
                measureObj2.MoveTo(115.5, 250.5);

                measureObj1.SetEndBar("repeat_b");
                measureObj1.UpdateGaps(200);

                measureObj2.SetEndBar("repeat_b");
                measureObj2.UpdateGaps(200);

                console.log(measureObj1.GetChordsInfo());
                console.log(measureObj2.GetChordsInfo());*/


                /*var timeObj = {}
                timeObj["beats"] = 4;
                timeObj["beat-type"] = 4;

                var deltaFile = {
                    attributes: {
                        clef: {sign:'G'},
                        time: timeObj
                    },

                    measures: [
                        getMeasure(),
                        getMeasure(),
                        getMeasure(),
                        getMeasure(),
                        getMeasure()
                    ]
                }

                OpenScore(deltaFile);

                console.log(scoreObj);*/

                var mObj1 = new ScoreBuilder.Measure(), //getMeasureR(),
                    mObj2 = new ScoreBuilder.Measure(), //getMeasureR();
                    mObj3 = new ScoreBuilder.Measure(), //getMeasureR();
                    mObj4 = new ScoreBuilder.Measure(), //getMeasureR();
                    mObj5 = new ScoreBuilder.Measure(), //getMeasureR();
                    mObj6 = new ScoreBuilder.Measure(), //getMeasureR();

                    cObj1 = new ScoreBuilder.Chord(2),
                    cObj2 = new ScoreBuilder.Chord(4, 1),
                    cObj3 = new ScoreBuilder.Chord(8),


                    c1Coll = [
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8)
                    ],
                    c2Coll = [
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8),
                        new ScoreBuilder.Chord(8)
                    ],
                    c3Coll = [
                        new ScoreBuilder.Chord(4),
                        new ScoreBuilder.Chord(4),
                        new ScoreBuilder.Chord(4),
                        new ScoreBuilder.Chord(4)
                    ],
                    c4Coll = [
                        new ScoreBuilder.Chord(4),
                        new ScoreBuilder.Chord(4),
                        new ScoreBuilder.Chord(4),
                        new ScoreBuilder.Chord(4)
                    ],
                    c5Coll = [
                        cObj1,
                        cObj2,
                        cObj3
                    ],
                    c6Coll = [
                        new ScoreBuilder.Chord(2),
                        new ScoreBuilder.Chord(2)
                    ];


                    mObj1.AddChordCollection(c1Coll);
                    mObj2.AddChordCollection(c2Coll);                
                    mObj3.AddChordCollection(c3Coll);
                    mObj4.AddChordCollection(c4Coll);
                    mObj5.AddChordCollection(c5Coll);
                    mObj6.AddChordCollection(c6Coll);

                cObj1.AddNote({n: "E", o: 5 });

                /*cObj2.AddNote({n: "E", o: 5 });
                cObj2.AddNote({n: "C", o: 0 });*/

                cObj3.AddNote({n: "C", o: 4 }); 


                /*cObj1.AddNote({n: "A", o: 4, a: getRandomAccident() });     
                cObj2.AddNote({n: "B", o: 4, a: getRandomAccident() });
                cObj3.AddNote({n: "C", o: 5, a: getRandomAccident() });      
                cObj4.AddNote({n: "D", o: 5, a: getRandomAccident() });
                cObj5.AddNote({n: "E", o: 4, a: getRandomAccident() });      
                cObj6.AddNote({n: "F", o: 5, a: getRandomAccident() });*/
                /*cObj7.AddNote({n: "G", o: 4, ac: getRandomAccident() });      
                cObj8.AddNote({n: "A", o: 4, ac: getRandomAccident() });*/

                //cObj9.AddNote({n: "A", o: 5});




                /*mObj2.InsertChord(cObj7);

                mObj4.InsertChord(cObj8);*/

                /*mObj1.SetStartBar("double");
                mObj2.SetStartBar("repeat_f");
                mObj3.SetStartBar("repeat_f");
                mObj4.SetStartBar("repeat_f");*/
                mObj1.SetEndBar("simple");
                mObj2.SetEndBar("end");
                mObj3.SetEndBar("simple");
                mObj4.SetEndBar("end");
                mObj5.SetEndBar("simple");
                mObj6.SetEndBar("end");



                //cObj1.AddNote({n: 'G', o: 4, a: "flat-flat"});
                /*cObj2.AddNote({n: 'G', o: 4 });
                cObj3.AddNote({n: 'G', o: 4, a: "natural"});
                cObj6.AddNote({n: 'G', o: 4, a:""});
                cObj6.AddNote({n: 'A', o: 4 });
                cObj6.AddNote({n: 'A', o: 6 });*/

                /*svgContainer.appendChild(mObj1.Draw()); 
                svgContainer.appendChild(mObj2.Draw()); 

                mObj1.Organize();
                mObj2.Organize();

                syncMeasures([mObj1, mObj2]);

                var obj1Box = mObj1.Draw().getBBox();
                mObj1.MoveTo(200, 10 - obj1Box.y);
                
                mObj2.MoveTo(200, obj1Box.height - obj1Box.y + 100);*/


                var timeObj = {}
                timeObj["beats"] = 4;
                timeObj["beat-type"] = 4;

                var keyObj = { fifths: 5 }

                var sPart1 = new ScoreBuilder.ScorePart({clef:{sign: "G"}, time: timeObj, key: keyObj });
                sPart1.InsertMeasure(mObj1);
                sPart1.InsertMeasure(mObj2);

                var sPart2 = new ScoreBuilder.ScorePart({clef:{sign: "F"}, time: timeObj, key: keyObj });
                sPart2.InsertMeasure(mObj3);
                sPart2.InsertMeasure(mObj4);

                var sPart3 = new ScoreBuilder.ScorePart({clef:{sign: "C"}, time: timeObj, key: keyObj });
                sPart3.InsertMeasure(mObj5);
                sPart3.InsertMeasure(mObj6);

                var sGroup1 = new ScoreBuilder.ScoreGroup();
                sGroup1.InsertPart(sPart1);
                sGroup1.InsertPart(sPart2);
                sGroup1.InsertPart(sPart3);

                

                svgContainer.appendChild(sGroup1.Draw());
                sGroup1.Organize();
                sGroup1.MoveTo(10, 10.5);

                mObj1.Draw().addEventListener("click", function(){
                    mObj1.InsertChord(getChordR());
                    sGroup1.Organize();
                });

                mObj2.Draw().addEventListener("click", function(){
                    mObj2.InsertChord(getChordR());
                    sGroup1.Organize();
                });


                mObj3.Draw().addEventListener("click", function(){
                    mObj3.InsertChord(getChordR());
                    sGroup1.Organize();
                });


                mObj4.Draw().addEventListener("click", function(){
                    mObj4.InsertChord(getChordR());
                    sGroup1.Organize();
                });

                mObj5.Draw().addEventListener("click", function(){
                    mObj5.InsertChord(getChordR());
                    sGroup1.Organize();
                });


                mObj6.Draw().addEventListener("click", function(){
                    mObj6.InsertChord(getChordR());
                    sGroup1.Organize();
                });




                /*var measureGroup1 = new ScoreBuilder.MeasureGroup();
                var measureGroup2 = new ScoreBuilder.MeasureGroup();

                measureGroup1.AddMeasure(mObj1);
                measureGroup1.AddMeasure(mObj2);

                measureGroup2.AddMeasure(mObj3);
                measureGroup2.AddMeasure(mObj4);*/

                //measureGroup1.Organize();
                //console.log(measureGroup1.GetFixedLength());
                //console.log(measureGroup1.GetDenominatorSum());

                /*var lineBeta = GetLinesBeta([measureGroup1, measureGroup2]);
                svgContainer.appendChild(lineBeta);
                lineBeta.translate(10, 10);*/


                /*var partObj1 = new ScoreBuilder.ScorePart();
                partObj1.InsertMeasure(mObj1);
                
                var partObj2 = new ScoreBuilder.ScorePart();
                partObj2.InsertMeasure(mObj2);

                var scoreGroupObj = new ScoreBuilder.ScoreGroup();
                scoreGroupObj.InsertPart(partObj1);
                scoreGroupObj.InsertPart(partObj2);

                scoreGroupObj.Organize();
                scoreGroupObj.MoveTo(10, 10);

                svgContainer.appendChild(scoreGroupObj.Draw());*/

                /*var halfLine = $G.create("line");
                halfLine.setAttribute("y2", 1000);
                halfLine.setAttribute("stroke", "#000");
                halfLine.translate(200.5, 0);
                svgContainer.appendChild(halfLine); 

                var chordObj = getChordR();
                svgContainer.appendChild(chordObj.Draw());                
                chordObj.Organize();
                chordObj.MoveChordHead(200.5, 200);
                console.log(chordObj.GetBackLength());
                console.log(chordObj.GetFrontLength());*/
            }




            function getMeasureR() {
                var measureObj = new ScoreBuilder.Measure(),
                    measureData = getMeasure();

                var chords = measureData.chords ? measureData.chords : [];

                for(var j = 0; j < chords.length; j++) {
                    var chordObj = new ScoreBuilder.Chord(chords[j].den);
                    
                    var notes = chords[j].notes ? chords[j].notes : [];

                    for(var k = 0; k < notes.length; k++)
                        chordObj.AddNote(notes[k]);

                    measureObj.InsertChord(chordObj);
                }
                measureObj.SetEndBar("simple");
                //measureObj.SetEndBar("simple");

                return measureObj;                
            }

            function getChordR() {
                var chords = getRandomChord();

                var chordObj = new ScoreBuilder.Chord(chords.den);
                
                var notes = chords.notes ? chords.notes : [];

                for(var k = 0; k < notes.length; k++)
                    chordObj.AddNote(notes[k]);

                return chordObj;
            }

            function getInt(from, to) {
                return Math.round(Math.random()*(to-from) + from);
            }

            function getMeasure() {
                var measure = {
                    chords: [
                        getRandomChord(),
                        getRandomChord(),
                        //{ den: 1 , notes: [{n: 'B', o: 5, a: ""}] }
                    ]
                }
                return measure;
            }

            function getRandomChord() {
                var numberOfNotes = getInt(1,1),
                    randDen = Math.pow(2, getInt(0,6));
                    chord = { den: randDen , notes: [] };

                for(var i = 0; i < numberOfNotes; i++) {
                    var randomNote = String.fromCharCode(65 + getInt(0,6)),
                        randomOctave = getInt(3,6);

                    chord.notes.push({ n: randomNote, o: randomOctave, a: getRandomAccident() });
                }
                
                return chord;
            }

            function getRandomAccident() {
                //return "";
                var value = Math.round(Math.random() * 5),
                    acc = "";
                
                switch(value) {

                    case 1:
                        acc = "natural";
                        break;
                    
                    case 2:
                        acc = "sharp";
                        break;

                    case 3:
                        acc = "double-sharp";
                        break;

                    case 4:
                        acc = "flat";
                        break;

                    case 5:
                        acc = "flat-flat";
                        break;
                }

                return acc;
            }



            
            var svgContainer = document.getElementById("svgContainer"),
                scoreObj = null;

            //debug();

            function debug() {
                var chord = new ScoreBuilder.Chord({ denominator: 1 });
                chord.AddNote({n: 'G', o:3 });
                chord.Organize();
                svgContainer.appendChild(chord.Draw());
                chord.Draw().translate(100, 100);


            }

            function OpenScore(jsonStr) {
                //var composinObj = toComposinFormat(JSON.parse(jsonStr));

                //console.log(JSON.parse(jsonStr));
                //console.log(composinObj);

                if(scoreObj)
                    svgContainer.removeChild(scoreObj.Draw());
                    
                //scoreObj = ScoreLoader.Open(composinObj);
                scoreObj = ScoreLoader.Open(jsonStr);

                svgContainer.appendChild(scoreObj.Draw());
                
                scoreObj.Organize(1500, 300);
                scoreObj.MoveTo(15.5, 0.5);
            }

            //FILE OPEN STUFF
            var fileOpenBut = document.getElementById('files');
            fileOpenBut.addEventListener('change', handleFileSelect, false);

            function openFile() {
                //fileOpenBut.click();
            }

            function handleFileSelect(evt) {
                var file = evt.target.files[0]; // FileList object
                if(!file)
                    return;

                fileOpenBut.value = ""; //clear file value to be able to open the same file if needed

                var reader = new FileReader();

                reader.onloadend = function() {
                    if(reader.readyState == 2) {
                        //var xmlobj = parseXml(reader.result);
                        //console.log(xmlobj.documentElement.getElementsByTagName("measure"));    

                        //var jsonstr = xml2json(xmlobj);
                        //console.log(jsonstr);
                        //console.log(JSON.parse(jsonstr.replace("undefined", "")));
                        
                        postFile(replaceCreator(reader.result));
                        //console.log(replaceCreator(reader.result));
                    }
                }

                reader.readAsText(file);
            }

            function parseXml(xml) {
   var dom = null;
   if (window.DOMParser) {
      try { 
         dom = (new DOMParser()).parseFromString(xml, "text/xml"); 
      } 
      catch (e) { dom = null; }
   }
   else if (window.ActiveXObject) {
      try {
         dom = new ActiveXObject('Microsoft.XMLDOM');
         dom.async = false;
         if (!dom.loadXML(xml)) // parse error ..

            window.alert(dom.parseError.reason + dom.parseError.srcText);
      } 
      catch (e) { dom = null; }
   }
   else
      alert("cannot parse xml string!");
   return dom;
}

            //function to replace the creator from music xml to easily find composer and lyricist
            function replaceCreator(xmlString) {
                //return xmlString;

                var changeArray = [];
                    composerIndex = xmlString.indexOf("<creator type=\"composer\">"),
                    poetIndex = xmlString.indexOf("<creator type=\"poet\">"),
                    lyricistIndex = xmlString.indexOf("<creator type=\"lyricist\">"),
                    artistIndex = xmlString.indexOf("<creator type=\"artist\">"),
                    tabberIndex = xmlString.indexOf("<creator type=\"tabber\">");

                if(composerIndex > -1)
                    changeArray[composerIndex] = "composer";

                if(poetIndex > -1)
                    changeArray[poetIndex] = "poet";

                if(lyricistIndex > -1)
                    changeArray[lyricistIndex] = "lyricist";

                if(artistIndex > -1)
                    changeArray[artistIndex] = "artist";

                if(tabberIndex > -1)
                    changeArray[tabberIndex] = "tabber";

                for(var i = 0; i < changeArray.length; i++) {
                    if(changeArray[i] == undefined)
                        continue;

                    xmlString = xmlString
                        .replace("<creator type=\"" + changeArray[i] + "\">", "<" + changeArray[i] + ">")
                        .replace("</creator>", "</" + changeArray[i] + ">");    
                }

                return xmlString;
            }

            //FILE POST STUFF
            function postFile(fileText) {
                var request = $.ajax({
                    url: "openFile.php",
                    type: "post",
                    data: { file: fileText}
                });

                // Callback handler that will be called on success
                request.done(function (response, textStatus, jqXHR){
                    OpenScore(response);
                });

                // Callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown){
                    // Log the error to the console
                    console.error(
                        "The following error occurred: "+
                        textStatus, errorThrown
                    );
                });

                // Callback handler that will be called regardless
                // if the request failed or succeeded
                request.always(function () {});
            }

            /*
            window.onresize = function() {
                svgPage.width = window.innerWidth - 400;

                if(score) {
                    score.Organize(window.innerWidth - 420, 300);
                }
            }*/

        </script>
    </body>   
</html>