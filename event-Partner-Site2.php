<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Event-Partner Calculator</title> 
    <!--meta http-equiv="refresh" content=5; URL="http://development.bpmspace.org:4040/mITSM-partner-network/event-partner-calculator.php"-->
    <meta http-equiv="content-type" content="text/html; 
    <meta charset=UTF-8">
    <meta name="viewport" content="width=devivce-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script type="text/javascript">
               //Funktionen für Tabellen
                var x=0;
                var y="a";
                function ad_row(table_id)
                {
                       
                        //var table_id = "t1";
                        var table = document.getElementById( table_id );
                        var rows = table.getElementsByTagName( "tr" ).length;
                        var tr = table.insertRow( rows );
                        var td1 = document.createElement( "td" );
                        var td2 = document.createElement( "td" );
                        var td3 = document.createElement( "td" );
                        td1.innerHTML = '<input type="text" size= 25 id="'+y+'" name="menge" placeholder="Neuen Partner hier eintragen" onchange="enable()" />';
                        td2.innerHTML = '<input type="text" name="teilnehmer" placeholder="Bitte erst Partner eintragen" onchange="ad_row2()" class="form-control" id="'+x+'" type="text" disabled/>';
                        td3.innerHTML = '$Einnahmen=0 <button class="close" id="closeButton" data-toggle="modal" data-target="#myModal" >&times</button>'//'<input type="text" name="euro_stueck" />';
                        tr.appendChild( td1 );
                        tr.appendChild( td2 );
                        tr.appendChild( td3 );
                        document.getElementById("addButton").disabled = true; 
                        //document.getElementById("addButton").parentElement='<input type="button" id="addButton" class="btn btn-primary disabled" value="Eintrag hinzufügen" />
                }
                function enable(){
                 document.getElementById(x).parentElement.innerHTML = '<input type="text" placeholder="Hier neuen Partner eintragen" onchange=" ad_row2()" class="form-control" id="'+x+'"  />';
                 //document.getElementById(x).disabled =false 

                }
  
       // document.writeln("<input id='" + globalvariable + "'>");
        
                function ad_row2(){
                        var table_id = "t2";
                        var table = document.getElementById( table_id );
                        var rows = table.getElementsByTagName( "tr" ).length;
                        var tr = table.insertRow( rows );
                        var td1 = document.createElement( "th" );
                        var td2 = document.createElement( "td" );
                        var td3 = document.createElement( "td" );
                        td1.innerHTML = 'Anteil';
                        td2.innerHTML = '$_POST[teilnehmer]';
                        td3.innerHTML = '$_POST[menge]'//'<input type="text" name="euro_stueck" />';
                        tr.appendChild( td1 );
                        tr.appendChild( td2 );
                        tr.appendChild( td3 );
                        document.getElementById(x).parentElement.innerHTML = '$TeilnehmerPartner';
                        document.getElementById(y).parentElement.innerHTML = '$Partner1';
                        x=x+1;
                        y=y+1;
                        document.getElementById("addButton").disabled = false;
                }
              //Close Tabellen  
               //Zeile in Tabelle löschen
           

              //Tooltips
                  //Tooltip für addButton
                   $('[rel=tooltip].disabled').tooltip();

                   $('[rel=tooltip].disabled').bind('click', function(){
                    return false;
                  });
              
        </script>
  </head>
 <!--ZIEL: Die Tabelle soll anklickbar sein, und in jeder Zelle soll ein eigener Wert eingetragen werden können. Außerdem soll es möglich sein, alle Werte zurückzusetzen. 
     TODO: 1. Alle Werte sollen in einem 2 Dimensionalen Array abgespeichert werden. Der RESET-BUTTON baut auf diesem Array auf.
                  1.1.Array mit Standartwerten-> RESET BUTTON greift darauf zu, Tabelle wird von hier initalisiert.
                  1.2.Array mit neuen Werten: Wird vom User gefüllt, ¿SUBMIT-BUTTON? (""aktualisiere Daten"); Im optimalen Fall keiner Benötigt, AUTO_AKTUALISIERUNG
           2. Ein RESET_BUTTON
           3. Tabellen-Oberfläche: Die Tabelle sollte nicht mit "Textinputfeldern" gefüllt sein, erst bei Klick Änderung möglich, oder aber einfach unsichtbare Textfelder? :D 
           4. Implementiere in MODAL
          TASK 2: Tabs um von Form zu Form zu kommen 
         
TODO: Neue Zeilen muss man auch wieder löschen können. (kleines X am Ende der Zeile? :)
      -> TODO: Wenn eine Zeile gelöscht wird, dann muss sie auch unten gelöscht werden. Genauso umgekehrt, wenn eine erstellt wird, muss auch unten eine erstellt werden. 


         -->     
      <body>
        <div class="container">
          <h2>Partner & Veranstalter Übersicht</h2>
            <h3>Einnahmen Übersicht</h3>
              <table border=1 class="table table-striped table table-hover" id=t1>
                <thead>
                  <tr>
                    <th><b>Teilnehmer (direkte Teilnehmer via Vertribspartner)</b></th>
                    <th></th>
                    <th><b>Einnahmen</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Veranstalter</th>
                    <td>$TeilnehmerVeranstalter</td>
                    <td>$Einnahme2</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-3">
                                    <input type="button" id="addButton" rel= "tooltip" data-title="safs"  class="btn btn-primary" value="Neuen Partner hinzufügen" onclick="ad_row('t1')" /></div>
                               
          <div class="col-sm-3"></div>
          <div class="col-sm-3"></div>
          </div>
          
          <div class="container">
            <h3>Ausgaben - Übersicht</h3>
              <table border=0 class="table table-striped table table-hover" id=t2>
                <thead>
                  <tr>
                    <th></th>
                    <th>Ausgaben</th>
                    <th>Träger</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Prüfungsgebühr</th>
                    <td>=Teilnehmer*ParameterPrüfungsgebühr</td>
                    <td>Akkreditierungspartner</td>
                  </tr>
                  <tr>
                    <th>Prüfungspauschale</th>
                    <td>=ParameterPrüfungspauschale</td>
                    <td>$Akkreditierungspartner</td>
                  </tr>
                  <tr>
                    <th>Trainer</th>
                    <td>=ParameterPrüfungspauschale</td>
                    <td>$TrainerPool</td>
                  </tr>
                  <tr>
                    <th>ReisekostenTrainer</th>
                    <td>=ParameterPrüfungspauschale</td>
                    <td>$TrainerPool</td>
                  </tr>
                  <tr>
                    <th>Mittagessenpauschale</th>
                    <td>=ParameterPrüfungspauschale</td>
                    <td>$Veranstalter</td>
                  </tr>
                  <tr>
                    <th>Verpflegung im Schulungsraum</th>
                    <td>=ParameterPrüfungspauschale</td>
                    <td>$Veranstalter</td>
                  </tr>
                  <tr>
                    <th>Schulungsunterlagen (Druckkosten)</th>
                    <td>=ParameterPrüfungspauschale</td>
                    <td>$Veranstalter</td>
                  </tr>
                  <tr>
                    <th>Schulungsunterlagen (Lizenzkosten)</th>
                    <td>=ParameterPrüfungspauschale</td>
                    <td>$LieferantSchulungsunterlagen</td>
                  </tr>
                  <tr>
                    <th>Raummiete</th>
                    <td>=ParameterPrüfungspauschale</td>
                    <td>$Veranstalter</td>
                  </tr>
                  <tr>
                    <th>Verwaltungsgebühr für durchführende <br> Veranstaltungspartner pro Teilnehmer</th>
                    <td>=ParameterPrüfungspauschale</td>
                    <td>$Veranstalter</td>
                  </tr>
                  <tr>
                    <th>Gesamtsumme</th>
                    <td>$Summe</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>pro Teilnehmer</th>
                    <td>=$Summe/Teilnehmer</td>
                    <td></td>
                  </tr>
                  <tr>
                    <th>Anteil</th>
                    <td>=$Kosten Veranstalter</td>
                    <td>$Verantalter</td>
                  </tr>
                  <tr>
                    <th>Anteil</th>
                    <td>=$Kosten Partner1</td>
                    <td>$Partner1</td>
                  </tr>
                  <tr>
                    <th>Anteil</th>
                    <td>=$Kosten Partner X</td>
                    <td>$Partner X</td>
                  </tr>
                </tbody>
              </table>
              <!--/table-collapse -->
              <!-- start: Delete Coupon Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>
                               <h3 class="modal-title" id="myModalLabel">Warning!</h3>

                          </div>
                          <div class="modal-body">
                               <h4> Are you sure you want to DELETE?</h4>

                          </div>
                          <!--/modal-body-collapse -->
                          <div class="modal-footer">
                              <button type="button" class="btn btn-danger" id="btnDelteYes" onclick="x()" data-dismiss="modal">YES</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                          </div>
                          <!--/modal-footer-collapse -->
                      </div>
                      <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->
           </div>
     </body
 </html>