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
  
  
  
  
  </head>
    <body>
      <div class="container">
        <h2>Parameter - Übersicht</h2>
              <table border=0 class="table table-striped table table-hover">
                <thead>
                  <tr>
                    <th>Parameter</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Tage:</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>Dropdown NamederSchulung</td>
                  </tr>
                  <tr>
                    <th>Verkaufspreis:</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>€ pro Teilnehmer</td>
                  </tr>
                  <tr>
                    <th>Prüfungsgebühren:</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>€ pro Teilnehmer</td>
                  </tr>
                  <tr>
                    <th>Prüfungspauschale:</th>
                    <td><input type="text" placeholder="200" input="3"></td>
                    <td>€ pro Prüfung</td>
                  </tr>
                  <tr>
                    <th>Trainer - Kosten:</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>€ pro Tag</td>
                  </tr>
                  <tr>
                    <th>Trainer - Reisekosten:</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>€ Nach Reisedistanz<span class="glyphicon glyphicon-search" style="color:blue" data-toggle="modal" data-target="#FahrtkostenTabelle"></span>*</td> <!--TODO: Tabelle im Modal anklicken, um Preis einzutragen-->
                  </tr>
                  <tr>
                    <th>Schulungsunterlagen (Druckkosten):</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>€ pro Teilnehmer</td>
                  </tr>
                  <tr>
                    <th>Schulungsunterlagen (Lizenzkosten):</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>€ pro Teilnehmer</td>
                  </tr>
                  <tr>
                    <th>Raummiete:</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>€ pro Tag</td>
                  </tr>
                  <tr>
                    <th>Verwaltungsgebühr für durchführende <br> Veranstaltungspartner</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>€ pro Teilnehmer</td>
                  </tr>
                  <tr>
                    <th>Verpflegung im Schulungsraum:</th>
                    <td><input type="text" placeholder="200" ></td>
                    <td>€ pro Teilnehmer und Tag</td>
                  </tr>
                </tbody>
              </table
              <!-- Modal -->
          <div class="modal fade" id="FahrtkostenTabelle" role="dialog">
            <div class="modal-dialog modal-lg">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title">Fahrtkosten-Übersicht</h3>
                </div>
                <div class="modal-body">
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
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>  
            </div>
          </div>   
        </div>
      </div>
    </body
 </html>