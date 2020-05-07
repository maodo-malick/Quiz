<?php
$backmessage="";
$error="";
$c = uniqid (rand (), true);

if(isset($_POST['enregistre'])){
    if(empty($_POST['select'])){
        $backmessage="choisissez le type de question";
    }
    elseif(($_POST['select']=='Multiple' || $_POST['select']=='Simple') && empty($_POST['cocher'])){
        $backmessage="cochez au moins une reponse";
    }
    elseif(!empty($_POST['remplis'])&& !empty($_POST['howmuch']))
    {
        if ($_POST['howmuch']<1) {
            $backmessage="<span >veillez reparametrer votre score seul les scores >=1 sont valides</span>";
        }
        else
        {
            $question = [];
            $question['question']=$_POST['remplis'];
            $question['score']=$_POST['howmuch'];                
            $nbrep = $_POST['nbrInput'];
            switch ($_POST['select']) {
                case 'Multiple':
                    $question['type']=$_POST['select'];
                    $coche=$_POST['cocher'];
                    for ($i=1; $i <=$nbrep ; $i++) { 
                        if (isset($_POST['reponse'.$i])) {
                            $question['reponse'.$i] = $_POST['reponse'.$i];
                        }
                    }
                    break;
                case 'Simple':
                    $type=$_POST['select'];
                    $reponse=$_POST['champ'];
                    $coche=$_POST['cocher'];
                    break;
                case 'text':
                    $type=$_POST['select'];
                    $reponse=$_POST['field'];
                    break;
                default:
            	    break;
            }
        }
        print_r($question);
    }
    if (addQuestion($question)) {
    	$backmessage = "success";
    }
    else{
    	$backmessage = "erreur lors de l'ajout.";
    }
}
else{
    $backmessage="remplissez tout les champs Obligatoire";
}

function addQuestion($tab=[]){
	if(file_exists('../treatement/Question.json'))
    {
        $data = file_get_contents('../treatement/Question.json');
        $array_data = json_decode($data,true);
        $array_data[] = $tab;
        $array = json_encode($array_data,JSON_PRETTY_PRINT);
        if (file_put_contents('../treatement/Question.json',$array)) {
        	$backmessage="les données on etait ajouter avec success";       
        }
        else { 
            $backmessage="l'Enregistrement a échouer ";
        }
        
    }
}
?>

<div class="Question">
	<div class="haute">
    <p>PARAMETRER VOTRE QUESTION</p>
    </div>
    
    <div class="parametre">
    <form method="POST" id="form-question" enctype="application/json">
    <?php
    if(isset($error))
    {
        echo $error;
    }
    ?>
     <div id="Question">
               <h4>Question</h4>
                <div id="rempliquestion">
                  <input type="text" name="remplis" error="error-1" id="question+<?php echo $c; ?>" />
                </div>
         </div>
         <div class="affiche" id="error-1"> </div>
         <div class="score">
                <div class="h4"><h4>Score</h4></div>
                <div class="champs">
            <input type="number" name="howmuch" error="error-2"></div>
         </div>
         <div class="affiche" id="error-2"></div>
         <div id="select">
         <div class="reponse"><h4>Type Reponse</h4></div>
         <div class="Choix" id="input"error="error-3">
                   <select  id="Select" class="monselect" name="select" onchange="Onchange();" >
                    <option value="" >Donner le type de reponse</option>
                    <option value="Multiple">Choix Multiple</option>
                    <option value="Simple">Choix Simple</option>
                    <option value="text">Choix texte</option>
                 </select>
                 </div>
                 <div class="affiche" id="error-3"></div>
                 <div class="ajout"  id="add" >
                     <button type="button" class="btn" id="ajout" onclick="Generer();"><img src="public/icones/ajout-rponse.png" alt=""></button>
                 </div>
                
        </div>
        <div class="container" id="container" >
      </div>
        <div class="enreg">
            <div class="submit">
            <button type="submit" name="enregistre">Enregistrer</button>
            </div>
            <?php 
            if(isset($backmessage))
            {
                echo $backmessage;
            }
            ?>
        </div>
        <input type="hidden" name="nbrInput" id="nbrInpt">
    </form>
    </div>
</div>
<script>
    var nbreinput=0;
    function Generer()
    {
         nbreinput++;
        var origin=document.getElementById("container");
        var choix=document.getElementById("Select")
        var Newinput=document.createElement("div")
        if(choix.value=="Multiple")
        {
            Newinput.setAttribute('class','container');
            Newinput.setAttribute('id','container'+nbreinput)
            Newinput.innerHTML=`
            <input type="text" class="champ" name="reponse${nbreinput}" error="error${nbreinput}" />
            <input type="checkbox" class="box" name="cocher[]" value="reponse${nbreinput}"/>
            <button type="button" class="btn1" onclick="deleteInput(${nbreinput})" ><img src="public/icones/supprimer.png" alt="" /></button>
            <div class="affiche" id="error+nbreinput"></div>
            `;
            origin.appendChild(Newinput);      
        }
     
        if(choix.value=="Simple")
        {
            Newinput.setAttribute('class','container');
            Newinput.setAttribute('id','container'+nbreinput)
            Newinput.innerHTML=`
            <input type="text" class="champ" name="reponse${nbreinput}" error="error"+${nbreinput}/>
            <input type="radio" class="box" name="cocher" value="reponse${nbreinput}"/>
            <button type="button" class="btn1" onclick="deleteInput(${nbreinput})" ><img src="public/icones/supprimer.png" alt="" /></button>
            <div class="affiche" id="error"+${nbreinput}></div>
            `;
            origin.appendChild(Newinput);
        }
        if (choix.value=="text") {
            Newinput.setAttribute('class','container');
            Newinput.setAttribute('id','container'+nbreinput)
            Newinput.innerHTML=`
            <input type="text" class="champ" name="field" error="error"+${nbreinput}/>
            <input type="radio" checked="" class="box" name="cocher"/>
            <div class="affiche" id="error"+${nbreinput}></div>`;
            origin.appendChild(Newinput);
            del();
        }
        document.getElementById('nbrInpt').value = nbreinput;
    }
    function deleteInput(i) {
         var target=document.getElementById('container'+i)
         target.remove();

    }
    
    function Onchange() {
                  var New=document.getElementById('container')
         New.innerHTML=``;
    }

    function del() {
        var add=document.getElementById("add")
        add.remove();
    }
     
    const inputs=document.getElementsByTagName("input");
        
    for(input of inputs)
    {
        input.addEventListener("keyup",function(e){
            if(e.target.hasAttribute("error"))
            {
                var idDivError=e.target.getAttribute("error");
                document.getElementById(idDivError).innerText=""
            }
        })
    }
    document.getElementById("form-question").addEventListener("submit",function(e){
       const inputs =document.getElementsByTagName("input");
       const select =document.getElementsByTagName("select")
       var error=false;
       for(input of inputs)
       {
            if(input.hasAttribute("error")){
               var idDivError=input.getAttribute("error")
               if(!input.value)
               {
                    document.getElementById(idDivError).innerText="Ce champ est obligatoire";
                    error=true;
                }
            }
       }
       if(error)
       {
            e.preventDefault();
            return false;
       }
    })
</script>