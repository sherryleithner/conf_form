<?php

if (isset($_POST['submit'])) {
   $requested_by = $_POST["REQUESTED_BY"];
   $date_neededby = $_POST["DATE_NEEDED_BY"];
   $format_source = $_POST["FORMAT_OF_SOURCE"];
   $conf_sponsor  = $_POST["CONF_SPONSOR"];
   $conf_date  = $_POST["CONF_DATE"];
   $conf_title = $_POST["CONF_TITLE"];
   $stag_group = $_POST["STAG_GROUP"];
echo $stag_group;
echo $requested_by;
echo $format_source;
} 
?>
<!-- For input type radio button the value attribute is not used, this is set in javascript -->
<!--<html> -->
    <head>
        <title>Conference Flowsheet</title>
            <link rel="stylesheet" type="text/css" href="conferenceFlowsheet.css"/>
            <script type="text/javascript" src="conferenceFlowsheet.js"></script>
           
    </head>

<body>
    
    <section class="output"> 
  
        <header>
            <h1><center>Processing Flow Sheet for Conferences</center></h1>
        </header>
    
   
   <form id="conference_flowsheet"  method="POST">
    <label for="requested_by" >Requested by:</label>
 <!--   <input type="text" id="request_by" name="request_by" size="15" required autofocus> -->
    <select id="requested_by" name="REQUESTED_BY" required>
        <option   value="">-- Select --</option>
        <option   value="Pam Jenni" <?php if($_POST['REQUESTED_BY'] == "Pam Jenni") { echo "selected=selected"; } ?> >Pam Jenni</option>
        <option   value="Maria Mullen" <?php if($_POST['REQUESTED_BY'] == "Maria Mullen") { echo "selected=selected"; } ?> >Maria Mullen</option>
        <option   value="Mark Finnegan" <?php if($_POST['REQUESTED_BY'] == "Mark Finnegan") { echo "selected=selected"; } ?> >Mark Finnegan</option>
        <option   value="Bethany Crow" <?php if($_POST['REQUESTED_BY'] == "Bethany Crow") { echo "selected=selected"; } ?> >Bethany Crow</option>
        <option   value="Donna Washburn" <?php if($_POST['REQUESTED_BY'] == "Donna Washburn") { echo "selected=selected"; } ?> >Donna Washburn</option>
        <option   value="Chaoying Zhang" <?php if($_POST['REQUESTED_BY'] == "Chaoying Zhang") { echo "selected=selected"; } ?> >Chaoying Zhang</option>
    </select> 
    <aside>
        <fieldset>
        <legend>Group</legend>
        <ul>
            <li><input type="radio" id="stag_exp" name="STAG_GROUP" value="Exploration" <?php if($_POST['STAG_GROUP'] == "Exploration") { echo "selected=selected"; } ?> required>Exploration</li>
            <li><input type="radio" id="stag_eng" name="STAG_GROUP" value="Engineering" <?php if($_POST['STAG_GROUP'] == "Engineering") { echo "selected=selected"; } ?> required>Engineering</li>
        </ul>
    </fieldset>
        <fieldset>
        <legend>Priority</legend>
        <ul>
            <li><input type="radio" id="priority" name="PRIORITY" value="Priority" required>Priority [FA]</li>
            <li><input type="radio" id="non_priority" name="PRIORITY" value="Non-Priority" required>Non-Priority [F]</li>
        </ul>
        </fieldset>
        <fieldset>
        <legend>(Abstracts)</legend>
        <ul>
        <li><input type="radio" id="run_abs" name="RUN ABSTRACTS" value="Yes" required>Run</li>
        <li><input type="radio" id="no_run_abs" name="RUN ABSTRACTS" value="No" required>Do Not Run</li>
        </ul>
        </fieldset>
        <fieldset>
        <legend>Meeting/Aspect type:</legend>
        <ul>
        <li><input type="radio" id="type_mpt" name="MEETING/ASPECT TYPE" value="meeting paper text" required>Meeting paper text</li>
        <li><input type="radio" id="type_mpa" name="MEETING/ASPECT TYPE" value="meeting paper abstract" required>Meeting paper abstract</li>
        <li><input type="radio" id="type_mpv" name="MEETING/ASPECT TYPE" value="meeting paper visual" required>Meeting paper visual</li>
        <li><input type="radio" id="type_mpm" name="MEETING/ASPECT TYPE" value="mixture of aspects" required>Mixture of aspects</li>
        </ul>
        </fieldset>
    </aside>  

    <fieldset>  
    <label for="date_neededby">Date Needed by:</label>
    <input type="date" id="date_neededby" name="DATE_NEEDED_BY" value="<?php if(isset($date_neededby)) { echo $date_neededby; } ?>"  >
    
    <label for="format_source" >Format of source:</label>
    
    <select id="format_source" name="FORMAT_OF_SOURCE" >
        <option   value=" Web" <?php if($_POST["FORMAT_OF_SOURCE"] == " Web") { echo "selected=selected"; } ?> >Web</option>
        <option   value=" cd" <?php if($_POST["FORMAT_OF_SOURCE"] == " cd") { echo "selected=selected"; } ?> >CD</option>
        <option   value=" dvd" <?php if($_POST["FORMAT_OF_SOURCE"] == " dvd") { echo "selected=selected"; } ?> >DVD</option>
        <option   value=" pdf" <?php if($_POST["FORMAT_OF_SOURCE"] == " pdf") { echo "selected=selected"; } ?> >Pdf</option>
        <option   value=" usb"  <?php if($_POST["FORMAT_OF_SOURCE"] == " usb") { echo "selected=selected"; } ?> >USB</option>
        <option   value=" hard copy"  <?php if($_POST["FORMAT_OF_SOURCE"] == " hard copy") { echo "selected=selected"; } ?> >Hard Copy</option>
        <option   value=" pq" <?php if($_POST["FORMAT_OF_SOURCE"] == " pg") { echo "selected=selected"; } ?> >ProQuest database </option>
    </select>

    <br>
    <label for="conf_sponsor">Conference Sponsor:</label>
    <input type="text" id="conf_sponsor" name="CONF_SPONSOR" value="<?php if(isset($conf_sponsor)) { echo $conf_sponsor;} ?>" size="50" required><br>
    <label for="conf_date">Conference Date:</label>
    <input type="text" id="conf_date" name="CONF_DATE" value="<?php if(isset($conf_date)) { echo $conf_date;} ?>" required><br>
    <label for="conf_title">Conference Title:</label>
    <input type="text" id="conf_title" name="CONF_TITLE" value="<?php if(isset($conf_title)) { echo $conf_title;} ?>" size="70" required><br>
    </fieldset>
    <fieldset>
        <legend>Done / Requested Action</legend>
        ___ <input type="checkbox" id="download_toc" name="Download TOC" checked>Download TOC
        ___<input type="checkbox" id="print_toc" name="Print TOC" checked>Print 1st page of TOC for BSS papers<br>
        ___ <input type="radio" id="select_all" name="SELECT ACTION" value=" Select All" required>Select All  OR
        <input type="radio" id="return_stag" name="SELECT ACTION" value=" Return to STAG for selection" required>Return to STAG for selection<br>
       
        ___ <input type="checkbox" id="download_papers" name="DOWNLOAD PAPERS" value=" Yes">Download papers
        ___<input type="checkbox" id="print_first_pages" name="PRINT FIRST PAGES" value=" Yes"><b>Print first pages</b>  
        <input type="number" id="number_papers" name="NUMBER OF PAGES" min="0" value="0" ># of papers <br>
        ___ <input type="checkbox" id="down_cit" name="DOWNLOAD CITATIONS" checked>Download citations, if available
    </fieldset>
    <fieldset>
        <legend>PADDS copy</legend>
        ___ <input type="radio" id="padds_orig" name="PADDS COPY" value=" Original to padds" required>Physical CD/DVD/USB/Hardcopy (original for Padds)  OR<br>
        ___ <input type="radio" id="padds_copy" name="PADDS COPY" value=" Create CD" required>Save web or electronic conference to CDROM
    </fieldset>
    <label for="conf_url" >Conference URL:</label>
 <!--   <input type="url" id="conf_url" name="CONF URL" placeholder="Enter a valid url starting with http" maxlength="200" size="81.5"  pattern="https?://.+" ><br> -->
    <input type="text" id="conf_url" name="CONF URL" placeholder="Cut & paste url, if readily available" maxlength="200" size="81.5"  ><br>
    <fieldset>
        <legend>Additional copies</legend>
        ___ <input type="checkbox" id="cd_copy" name="CD COPY FOR DSG ARCHIVE"  checked >CD copy for DSG archive<br>
        ___ <input type="radio" id="create_copies" name="COPIES" value="create full copy in /home/public" required>full electronic copy for STAG (/home/public) OR<br>
        ___ <input type="radio" id="move_copies" name="COPIES" value="move copy to /home/public" required>Move selected/downloaded papers from STAG to /home/public/<br>
         /home/public/Exploration/Conferences/20___/______/________________________________<br>
        /home/public/Engineering/Conferences/20___/______/________________________________
    </fieldset>
    <fieldset>
            <legend>Special instructions:</legend>
        <textarea id="special_inst" name="SPECIAL INSTRUCTIONS" rows="4" cols="50"  ></textarea>click & drag for more area<br>
        <textarea id="source_string" name="SOURCE STRING" rows="1" cols="50" placeholder="Enter information to include in source string"></textarea>Include in source string (such as an acronym)<br>
    </fieldset>
    <label><b>Select all email recipients:</b></label>
    <input class="email_group" type="checkbox" name="pam_j" id="pam_j" value="pjenni@utulsa.edu" <?php if(isset($_POST['pam_j'])) echo "checked='checked'"; ?> >Pam Jenni
    <input class="email_group" type="checkbox" name="maria" id="maria" value="mmullen@utulsa.edu" <?php if(isset($_POST['maria'])) echo "checked='checked'"; ?> >Maria
    <input class="email_group" type="checkbox" name="mark" id="mark" value="mfinneg@utulsa.edu" <?php if(isset($_POST['mark'])) echo "checked='checked'"; ?> >Mark
    <input class="email_group" type="checkbox" name="donna" id="donna" value="aq-user@utulsa.edu" <?php if(isset($_POST['donna'])) echo "checked='checked'"; ?> >Donna
    <input class="email_group" type="checkbox" name="chaoying" id="chaoying" value="chaoying-zhang@utulsa.edu" <?php if(isset($_POST['chaoying'])) echo "checked='checked'"; ?> >Chaoying
    <input class="email_group" type="checkbox" name="steph" id="steph" value="stephanie-martell@utulsa.edu" <?php if(isset($_POST['steph'])) echo "checked='checked'"; ?> checked>Stephanie
    <input class="email_group" type="checkbox" name="bcrow" id="bcrow" value="bcrow@utulsa.edu" <?php if(isset($_POST['bcrow'])) echo "checked='checked'"; ?> >Bethany
    <br>
    <label for="rm_num"> RM#</label>
    <input type="text" id="rm_num" name="RM # " size="5">
    <label for="tag_key">Tag#</label>
    <input type="text" id="tag_key" name="TAG KEY # " size="5" >
    <label for="num_batch">#Batches</label>
    <input type="text" id="num_batch" name="# BATCHES "  size="2"><br>
   
    
     <input type="submit" name="submit" value="Submit Form">  
    <input type="reset" value="Reset"> 
   
</form>


</section>
</body>
<?php echo $output; ?>
<!-- </html>  -->
