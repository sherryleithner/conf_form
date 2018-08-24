var $ = function(id) {
    return document.getElementById(id);
};//$


function printSheet() {
    alert("Submit button was clicked");
    var printerFriendly = window.open("", "", "width=1000, height=1000");
    printerFriendly.focus();
    var requestBy = $("requested_by").value;
    var stagGroup = $("stag_group").value;
    var priority = $("priority").value;
    var runAbs = $("run_abs").value;
    var dateNeededBy = $("date_neededby").value;
    var formatSource = $("format_source").value;
    var confSponsor = $("conf_sponsor").value;
    var selectAction = $("select_action").value;
//    var downloadPapers = $("download_papers").checked;
//    var runAbs = $("").value;
//    var runAbs = $("").value;
//    var runAbs = $("").value;
    
    
    
    printerFriendly.document.body.innerHTML = "<h3>Processing Flow Sheet for Conferences</h3> <p><b>Requested by: </b>" + requestBy +
    "&nbsp;&nbsp;&nbsp;  <b>Group: </b>" + stagGroup + "&nbsp;&nbsp;&nbsp; <b>Priority:  </b>" +  priority  +   "&nbsp;&nbsp;&nbsp; <b>(Abstracts): </b>" + runAbs + "<p>" +
    "<b>Date Needed by: </b>" + dateNeededBy  +  "&nbsp;&nbsp;&nbsp; <b> Format Source: </b>" + formatSource  + "<p>" +
   "<b>Conference Sponsor: </b" + confSponsor + "<p>" +  
  "<p><b>Completed:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Requested Action: </b><p>" + 
    "___________&nbsp;&nbsp;&nbsp;_X_ Download/Print first page of Table of Contents for BBS papers<p>" +
    "___________&nbsp;&nbsp;&nbsp;_X_  " + selectAction;
//    if (downloadPapers) {
//    printerFriendly.document.body.innerHTML = "_________    X Download Papers";
//    }
 //   else printerFriendly.document.body.innerHTML = "_________     Download Papers";   
}//printSheet

// function not used
//function validateUrl()  {
//    alert("URL changed");
      
  //      $("conf_url").focus();
  //      $("conf_url").value = " ";
//}//validateUrl

// function not used
//function validateNum(num_par)  {
//    alert("in val num");
//    if (isNaN(num_par) || num_par < 0) {
//        alert("Must be a number that is zero or more!");
//    } //if    
//} // validateNum

function sendEmail() {
    //alert ("in send email");
    
    var stagGroup, priorityStatus, runAbs, aspect, selectAction, downloadCit, paddsCopy, cdCopy, homePublic;
    
    var emailForm = prompt("Do you want to email this form? (Yes or No)", "Yes");
    alert("Now printing...");
    print();  // print screen 
      if (emailForm === "No") {
        alert("Exiting email option and printing now...");
        return;
      }
      
    var requestBy = $("requested_by").value;
    //alert ("in send email" + requestBy);

//    var stagGroup = $("stag_group").value;
    if ($("stag_exp").checked )  {
  		stagGroup = "Exploration";
  	}  
  	if ($("stag_eng").checked)   {
  		stagGroup = "Engineering";
    }
//    alert(stagGroup);
    if ($("priority").checked)   {
        priorityStatus = "Priority";
    }
    if ($("non_priority").checked)   {
       priorityStatus = "Non-Priority";
    }
//    alert(priorityStatus);
    if ($("run_abs").checked)   {
        runAbs = "Yes";
    }
    if ($("no_run_abs").checked)   {
        runAbs = "No";
    }
//    alert(runAbs);
    if ($("type_mpt").checked)   {
        aspect = "Meeting paper text";
    }
    if ($("type_mpa").checked)   {
        aspect = "Meeting paper abstract";
    }   
    
    if ($("type_mpv").checked)   {
        aspect = "Meeting paper visual";
    }
    if ($("type_mpm").checked)   {
        aspect = "Mixture of aspects";
    } 
//    alert(aspect);
    
    var dateNeededBy = $("date_neededby").value;
    var formatSource = $("format_source").value;
    var confSponsor = $("conf_sponsor").value;
    var confDate = $("conf_date").value;
    var confTitle = $("conf_title").value;
    if ($("download_toc").checked) {
        var downloadToc = "Yes";
    }
    if ($("print_toc").checked) {
        var printToc = "Yes";
    }
//    alert(tocBss);
    if ($("select_all").checked) {
        selectAction = "Select All";
        }
    if ($("return_stag").checked) {
        selectAction = "Return to STAG for selection";
        }
        
     
//    alert(selectAction);
    var downloadPapers = $("download_papers").value;
    var printFP = $("print_first_pages").value;
    var numberPapers = $("number_papers").value;
//    var downloadCit  = $("down_cit").value;
    if ($("down_cit").checked) {
        downloadCit = "Yes";
    }
    else {
        downloadCit = "No";
    }
        
//    alert(downloadCit);
//    var paddsCopy= $("padds_copy").value;
    if ($("padds_orig").checked) {
        paddsCopy = "Original to padds";
        }
    if ($("padds_copy").checked) {
        paddsCopy = "Create CD";
        }
//        alert(paddsCopy);
    var confUrl= $("conf_url").value;
    if ($("cd_copy").checked) {
        cdCopy = "Yes";
    }
    else {
        cdCopy = "No" ;
    }
//    alert(cdCopy);
//    var cdCopy = $("cd_copy").value;
    if ($("create_copies").checked) {
        homePublic = "create full copy in /home/public";
        }
    if ($("move_copies").checked) {
        homePublic = "move copy to /home/public";
        }
//        alert(homePublic);
    
    var specialInst = $("special_inst").value;
    var sourceString = $("source_string").value;

   var outputString = "Processing Flow Sheet for Conferences" +
  "%0D%0A%0D%0ARequested by: " + requestBy +
  "%0D%0A%0D%0AGroup: " + stagGroup +
  "%0D%0A%0D%0APriority:%20%20" + priorityStatus +
  "%0D%0A%0D%0ARun Abstracts: " + runAbs +
  "%0D%0A%0D%0AMeeting/Aspect type: " + aspect +
  "%0D%0A%0D%0ADate Needed by: " + dateNeededBy  +
  "%0D%0A%0D%0AFormat Source: " + formatSource  +
  "%0D%0A%0D%0AConference Sponsor: " + confSponsor +
  "%0D%0A%0D%0AConference Date: " +  confDate +
  "%0D%0A%0D%0AConference Title: " +  confTitle +
  "%0D%0A%0D%0ADownload TOC: " + downloadToc +
  "%0D%0A%0D%0APrint first page of Table of Contents for BSS: " + printToc +
  "%0D%0A%0D%0A" + selectAction +
  "%0D%0A%0D%0ADownload papers: " + downloadPapers +
  "%0D%0A%0D%0APrint first pages:  " + printFP +
  "%0D%0A%0D%0ANumber of papers:  " + numberPapers  +
  "%0D%0A%0D%0ADownload Citations, if available: " + downloadCit +
  "%0D%0A%0D%0APADDS Copy: " + paddsCopy +
  "%0D%0A%0D%0AConference URL: " + confUrl +
  "%0D%0A%0D%0ACD Copy for DSG archive: " + cdCopy +
  "%0D%0A%0D%0A Additional Copies: " + homePublic +
  "%0D%0A%0D%0ASpecial Instructions: " + specialInst +
  "%0D%0A%0D%0ASource String: " + sourceString;
   
  // alert(outputString);
   
   // create email string by concat email addresses
   var arrayEmails= [];
   var i = 0;
   var moreEmails = true;
   
   while (moreEmails) {
    
    
        if ($("pam_j").checked) {
             arrayEmails[i] = $("pam_j").value;
             i++;
             }
     //   alert(arrayEmails);
        if ($("maria").checked) {
             arrayEmails[i] = $("maria").value;
             i++;
             }
     //   alert(arrayEmails);
         if ($("mark").checked) {
             arrayEmails[i] = $("mark").value;
             i++;
             }
     //   alert(arrayEmails);
         if ($("bcrow").checked) {
             arrayEmails[i] = $("bcrow").value;
             i++;
             }
     //   alert(arrayEmails);
         if ($("steph").checked) {
             arrayEmails[i] = $("steph").value;
             i++;
             }
       // alert(arrayEmails);
          if ($("donna").checked) {
             arrayEmails[i] = $("donna").value;
             i++;
             }
          if ($("chaoying").checked) {
             arrayEmails[i] = $("chaoying").value;
             i++;
             } 
        moreEmails = false;
    } // while
    var emailList = arrayEmails.join();
   // DEBUG alert (emailList);
   

//    window.open('mailto:sherry-leithner@utulsa.edu, ' + emailList + '?subject=Processing Flow Sheet for Conferences' + "&body=" + outputString);  
    window.open('mailto:sherry-leithner@utulsa.edu, ' + '?subject=Processing Flow Sheet for Conferences' + "&body=" + outputString);  
     
        return;
}

// function to check if at least one email recipients are checked
// function not used
function unRequireCb(emailGroup) {
            var emailGp = document.getElementsByClassName(emailGroup);
            var atLeastOneChecked=false;//at least one cb is checked
            
            for (var i=0; i<emailGp.length; i++) {
                if (emailGp[i].checked === true) {
                    atLeastOneChecked=true;
                    alert(emailGp[i]);
                } //if
            } // for

            if (atLeastOneChecked === true) {
                for (i=0; i<emailGp.length; i++) {
                    emailGp[i].required = false;
                    alert(emailGp[i]);
                } // for
            } else {
                for (i=0; i<el.length; i++) {
                    emailGp[i].required = true;
                    alert(emailGp[i]);
                } // for
            } // else
        }  // unRequireCb

function eventHandler() {
   // $("conference_flowsheet").onsubmit = printSheet;
//    $("print_sheet").onclick = printSheet;
//    $("conf_url").onchange =validateUrl;
 //   $("rm_num").oninput = validateNum($("rm_num").value);
      $("conference_flowsheet").onsubmit = sendEmail;
//      window.print;
   }

window.onload = function() {
   //alert("in javascript");
    //$("conference_flowsheet").onsubmit = printSheet;
    
//    $("conf_date").value = " ";
//    $("conf_title").value = " ";
    
    eventHandler();
};//onload
