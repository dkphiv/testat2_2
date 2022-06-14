<!DOCTYPE html>
<html lang="de" dir="ltr">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="favicon.svg" type="image/x-icon">
        <title>Quiz Web Development I</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
		 <?php include 'database.php'; ?>
    </head>
    <body>
		<div style="text-align: center;">
			<img id="logo" src="logo.svg">
		</div>
        <div class="heading">
            <h1 id="head">Web Development I - Wie gut bist du vorbereitet?</h1>
            <h2 id="subhead">Beantworte Fragen zu HTML, CSS, JavaScript und PHP</h2>
        </div>
        <div id="element_container">
		<form action="javascript:void(0);">
            <div id="start_screen" class="quiz_start">
                    <div id="persAngaben">
                        <label id="inputhead">Persönliche Angaben</label><br><br>
                        <input type="name" class="input-anmeldung" id="Nachname" placeholder="Nachname" required> <br><br>
                        <input type="name" class="input-anmeldung" id="Vorname" placeholder="Vorname" required> <br><br>
                        <input type="name" class="input-anmeldung" id="Wohnort" placeholder="Wohnort" required> <br><br>
                        <input type="number" class="input-anmeldung" min="6" max="110" id="Alter" placeholder="Alter" class="box" required> <br><br>
                        <div class="select-wrapper">
                        <select id="geschlecht" required>
                            <option value="none" selected disabled hidden>Geschlecht</option>
                            <option value="männlich">männlich</option>
                            <option value="weiblich">weiblich</option>
                            <option value="divers">divers</option>
                        </select> <br><br>
                        <select id="tätigkeit" required>
                            <option value="none" selected disabled hidden>Tätigkeit</option>
                            <option value="Angestellter">Angestellte/r</option>
                            <option value="Beamter">Beamter/in</option>
                            <option value="Schüler">Schüler/in</option>
                            <option value="Student">Student/in</option>
                            <option value="Auszubildender">Auszubildende/r</option>
                            <option value="Selbstständig">Selbstständig</option>
                            <option value="Arbeitslos">Arbeitslos</option>
                            <option value="Rentner">Rentner/in</option>
						</select> <br><br>
						</div>
                   <button id="start_btn" class="start">Los Gehts!</button>
                </div>
            </div>
			</form>
            <div id="question" hidden>
                        <label>
                        <div id="fragenr">Frage <span id="qno"></span>
                        </div>  
                        </label><br><br>
                        <p id="question_text">...?</p><br><br>
                            <input type="radio" id="answer_a_rad" class="answer" name="default" value=""> 
                            <label id="answer_a">A</label><br><br>
                            <input type="radio" id="answer_b_rad" class="answer" name="default" value="">
                            <label id="answer_b">B</label> <br><br>
                            <input type="radio" id="answer_c_rad" class="answer" name="default" value=""> 
                            <label id="answer_c">C</label><br><br>
                            <input type="radio" id="answer_d_rad" class="answer" name="default" value=""> 
                            <label id="answer_d">D</label><br><br>
                            <p><button id="continue_btn" class="btn" role="button"><span id="commit_text" >Weiter</span></button></p>
            </div>
            <div id="over" class="quiz_end" hidden>
                <h1>Quiz Vorbei!</h1><br>
				
				<br>
                    HTML:<span id="html-ergebnis" class="ergebnisse">0/1</span><br><br>	<!--  0-1=rot, 2-3=orange, 4-5=grün -->
					CSS:<span id="css-ergebnis" class="ergebnisse">0/1</span><br><br>
					JavaScript:<span id="js-ergebnis" class="ergebnisse">0/1</span><br><br>
					PHP:<span id="php-ergebnis" class="ergebnisse">0/1</span><br><br><br>
					Dein Gesamtergebnis ist: <span id="total"> <span id="endpoints" class="ergebnisse">0</span> von <span id="possiblepoints">0</span></span><br><!--  0-7=rot, 8-14=orange, 15-20=grün -->
                <input type="button" id="restart" onclick="abgabe();" value="Ergebnisse abgeben"/>
              </div>
            </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="quiz.js"></script>
        <script src="script.js"></script>
		<script>
		function abgabe()
		{
		window.location.href = 'quiz.php?nachname=' + nachname +
		'&vorname=' + vorname +
		'&wohnort=' + wohnort +
		'&alter=' + alter +
		'&geschlecht=' + geschlecht +
		'&taetigkeit=' + tätigkeit +
		'&html_punkte=' + QuestionsHTML +
		'&css_punkte=' + QuestionsCSS +
		'&js_punkte=' + QuestionsJavaScript +
		'&php_punkte=' + QuestionsPHP +
		'&gesamtpunktzahl=' + points;
		}
		</script>
    </body>
</html>