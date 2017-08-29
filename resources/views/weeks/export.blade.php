<!doctype html>
<html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <link rel="stylesheet" href="https://rawgit.com/lodev09/bootstrap-markdown/master/css/bootstrap-markdown.min.css">
       <style> 
              body {
                        font-family: 'Times-Roman';
                        height: 100vh;
                        margin: 0;
              }

              .container {
                        width: 700px;
              }

              table {
                        border: solid 0.5px; 
              }
            
              td {
                        padding: 0;
              }

              .table-element {
                        margin-top; 30px;
                        margin-bottom; 30px;
                        width: 700px;
                        height: 200px;
              }

              p {
                    
              }
               .underlined {
                    text-decoration: underline;
               }

               .datesdisplay {
                    float: right;
               }
         </style>
    </head>
    <body>
        <div class="container">
            <p>Ausbildungsnachweis für Ausbildungswoche Nr. <span class="underlined">{{ $week->week_nr }}</span></p>        
            <p class="datesdisplay"> von <span class="underlined"> {{ $week->start_date }}</span>   bis <span class="underlined">{{ $week->end_date }}</span></p>      
            <p>Name: <span class="underlined">{{ $week->name }}</span></p>
            <p>Ausbildungsberuf:                   <span class="underlined">{{ $week->profession }}</span></p>
            <p>Ausbildende Abteilung: <span class="underlined">{{ $week->department }}</span></p>

            <h5>Tätigkeit und Stoff der Unterweisung</h5>
            <p>Ausbildung am Arbeitsplatz</p>
            <table class="table table-element">
                <tbody>
                    <td>{!! $week->training !!}</td> 
                </tbody>
            </table>
            <p>Betriebliche Schulung/Unterweisung</p>
            <table class="table table-element">
                <tbody>
                    <tr><td>{!! $week->work !!}</td></tr> 
                </tbody>
            </table>
            <p>Berufschule</p>
            <table class="table table-element">
                <tbody>
                    <tr><td>{!! $week->school !!}</td></tr> 
                </tbody>
            </table>
        </div>
    </body>
</html>
