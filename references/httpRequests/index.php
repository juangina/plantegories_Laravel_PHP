<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
      crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="" href="https://fonts.googleapis.com/css?family=Rubik">
    <title>Forms</title>
  </head>

  <body>
    <section class="container">

      <form id="myForm">
		    <h1>Form Reference</h1>
        
        <section class="">
          <label for="formText">Form Text</label>
    			<input type="text" name="formText" id="formText">
        </section>
        <hr>
        
        <section class="">
          <label for="formNumber">Form Number</label>
          <input type="number" name="formNumber" id="formNumber">
        </section>
        <hr>
        
        <section class="">
          <label for="doneness">Form Range</label>
          <br>
          <span>Min</span>
          <input type="range" name="formRange" id="formRange" value="5" 
          min="1" max="10">
          <span>Max</span>
        </section>
        <hr>
        
        <section class="">
          <span>Form Check Box</span>
          <br>
          <input type="checkbox" name="formCheckbox01" id="formCheckbox01" value="check01">
          <label for="lettuce">Check One</label>
          <input type="checkbox" name="formCheckbox02" id="formCheckbox02" value="check02">
          <label for="lettuce">Check Two</label>
          <input type="checkbox" name="formCheckbox03" id="formCheckbox03" value="check03">
          <label for="lettuce">Check Three</label>
        </section>
        <hr>
        
        <section class="">
          <span>Form Radio Button</span>
          <br>
          <input type="radio" name="formRadioYes" id="formRadioYes" value="yes">
          <label for="formRadioYes">Form Yes</label>
          <input type="radio" name="formRadioNo" id="formRadioNo" value="no">
          <label for="formRadioNo">Form No</label>
        </section>
        <hr>
       
        <section class="">
          <label for="formDropbox">Form Dropbox</label>
          <select name="formDropbox" id="formDropbox">
            <option value="itemDropboxOne">Item One</option>
            <option value="itemDropboxTwo">Item Two</option>
            <option value="itemDropboxThree">Item Three</option>
          </select>
        </section>
        <hr>

        <section class="">
          <label for="listListbox">Form Listbox</label>
          <input list="listItems" id="listListbox" name="listListbox">
          <datalist id="listItems">
            <option value="listItemOne"></option>
            <option value="listItemTwo"></option>
            <option value="listItemThree"></option>
          </datalist>
        </section>
        <hr>

        <section class="">
          <label for="textArea">Text Area</label>
          <br>
          <textarea id="textArea" name="textArea" rows="5" cols="50"></textarea>
        </section>
        <hr>

        <section class="">
          <input id="formSubmit" type="submit" value="Submit">
        </section>
      </form>

      <h1>jQuery Ajax Post Form Result</h1>
 
      <span id="output">
        <!--Form Output Goes Here-->
      </span>

    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="/js/form.js">
    </script>

  <!--php -S localhost:8000-->
  </body>

</html>
