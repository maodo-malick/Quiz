<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
          

    function Generer() {
        
        var select=document.getElementById("Select");
        var rep=document.getElementById("rep1");

    if(select.value=="Multiple")
    {
        
        var form=document.getElementById("form");
        var nbre=document.getElementById("repons").value;
        alert(nbre);

      
       for(var i=0;i<nbre;i++){
        var sup = document.createElement("input");
        var supr=document.createElement("input");
        sup.setAttribute('type','text');
        supr.setAttribute('type','checkbox');
        sup.setAttribute('name','rep'+i);
        supr.setAttribute('name','choix'+i);
        sup.setAttribute('class','rep');
        supr.setAttribute('class','choix');
        var text=document.createElement("label");
        var text1=text.innerHTML="Nbre de reponse";
        form.appendChild(sup);
        form.appendChild(supr);
      }
      
        
    }
    if(choix=="Simple")
    {
        var radio=document.createElement("input");
        radio.setAttribute('type','radio');
        radio.setAttribute('class','rond');
        form.appendChild(radio);
    }
    if(choix=="text")
    {
        var text=document.createElement("input");
        text.setAttribute('type','textarea');
        text.setAttribute('class','textarea');
        form.appendChild(text);
    }
    
}
//select.addEventListener("change",Generer)
   
        </script>

    <link href="Interface.css" rel="stylesheet">
</head>
<body>
    <div id="interface">
    <form action="" method="POST">
    <div id="bienvenue">
              <strong><h2>BIENVENUE SUR LA PLATEFORME D'EDITION DES QUESTIONNNAIRES</h2></strong>
         </div>
         <div id="Question">
               <h2>Question</h2>
                <div id="rempliquestion">
                  <input type="text" name="remplis" />
                </div>
         </div>
       <div id="Score">
           <h2>Score</h2> 
           <div id="score">
           <input type="text" name="score">
           </div>
       </div>
       <div id="select">
            <h2>Type Reponse</h2>
         <div id="Choix">
            <select name="Select" id="Select" class="monselect">
            <option value="">----</option>
             <option value="Multiple">Choix Multiple</option>
             <option value="Simple">Choix Simple</option>
             <option value="text">Choix texte</option>
            </select>
        </div>
     </div>

        <h2>Nbre reponse</h2>
        <div id="form">
        <input type="text" name="reponse" id="repons" onkeyup="Generer();">
       </div>
   </div>
    <div id="action">
    <input type="submit" name="Valider" value="VALIDER" />
    </div>
    </form>
</div>
</body>
</html>