<script type = "text/javascript">
    var popUpObj;
    function showModalPopUp(quiz_id)
    {
    	popUpObj=window.open("quizflow.php?quiz=" + quiz_id ,
    	"ModalPopUp",
    	"toolbar=no," +
    	"scrollbars=yes," +
    	"location=no," +
    	"statusbar=no," +
    	"menubar=no," +
    	"resizable=yes," +
    	"width=800," +
    	"height=680," +
    	"left=490," +
    	"top=200"
    	);
    	popUpObj.focus();
    	LoadModalDiv();
    }

    function LoadModalDiv()
    {
        var bcgDiv = document.getElementById("divBackground");
        bcgDiv.style.display="block";
    }

    function HideModalDiv()
     {
        var bcgDiv = document.getElementById("divBackground");
        bcgDiv.style.display="none";
     }
</script>

	<p>This is a test index page.</p>
	
	<input type="button" value="Open the Quiz" onclick="showModalPopUp(1)" style="color: red; cursor: pointer;" />

<div id = "divBackground" style="position: fixed; z-index: 999; height: 100%; width: 100%; top: 0; left:0; background-color: Black; filter: alpha(opacity=60); opacity: 0.6; -moz-opacity: 0.8;display:none">
</div>
