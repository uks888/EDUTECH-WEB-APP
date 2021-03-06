<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="https://www.google.com/jsapi">
    </script>
    <script type="text/javascript">

      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });

      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };

        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textbox with id
        // 'transliterateTextarea'.
        control.makeTransliteratable(['transliterateTextarea']);
      }
      google.setOnLoadCallback(onLoad);
 	function speak(){
	
	var msg = new SpeechSynthesisUtterance(document.getElementById('transliterate').value);
	window.speechSynthesis.speak(msg);

}
    </script>
  </head>
  <body>
    Use Ctrl+G to toggle between Hindi and English.<br>
  <input type="button" onclick="speak()" value="Speak">
    <textarea id="transliterate" style="width:600px;height:200px"> </textarea> 
  </body>
</html>