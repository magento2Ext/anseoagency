var count = 0;//test

var robots= {
    "All": false,
    "Googlebot": true,
    "Googlebot-Mobile":  true,
    "Googlebot-Image":  true,
    "Mediapartners-Google": true,
    "Adsbot-Google": true,
    "Slurp": true,
    "msnbot": true,
    "msnbot-media": true,
    "Teoma": false
};

function robot_txt_rules(action, robot, url) {
    this.id = count;
    this.action = action;
    this.robot = robot;
    this.url = url;
    this.has_errors = false;
    count++;
}

var rules = [];

function getSelectBox(r) {
    var opt = "";
    jQuery.each(robots, function( index, value ) {
      if (r == index) {
            opt += '<option value="' + index + '" selected="selected" >' + index + '</option>';
        } else {
            opt += '<option value="' + index + '">' + index + '</option>';
        }
    });
   return opt;
}

function columnToCopy(id, a, r, u) {
              
    var html = "";

          
           //html+='<table id="rule_' + id + '" class="table table-bordered">';
        //    html+='<tbody >';
           html+=      '<tr id="rule_' + id + '">';
           html+=          '<td scope="row"  ><input type="checkbox" name="edit_action_' + id + '" id="edit_allow_' + id + '" value="Allow"';
             if (a == "Allow") html += ' checked="checked"';
           
           
           html+= ' style="margin-left: 8px;margin-top: 20px;"></td>';
           html+=           '<td ><select style="width: 100%;box-sizing: border-box;border: 1px solid #ccc;border-radius: 4px; padding: 18px 33px 19px 40px;"class="form-select"  id="edit_robot_' + id + '">' + getSelectBox(r) + '</select></td>';
           html+=           '<td><input type="text" name="edit_url_' + id + '" id="edit_url_' + id + '" class="input-url" value="' + u + '"></td>';
           html+=           '<td><a><i  style="margin-left: 8px;margin-top: 20px;"class="fa fa-times" aria-hidden="true" id="delete_rule_' + id + '" ></i></a></td>';
           html+=        '</tr>';
           //html+=       '</tbody>';
         // html+=      '</table>';
    // html += '<div id="rule_' + id + '">';
    // html += '<div class="dis_alo_main define_float"><h3>Action</h3></div><div class="form_ra left_ra"><div class="form_ra_main define_float">'
//     html += '<input type="radio" name="edit_action_' + id + '" id="edit_disallow_' + id + '" value="Disallow"';
//     if (a == "Disallow") html += ' checked="checked"';
//     html += ' /><label for="edit_disallow_' + id + '">Disallow</label></div></div>';
//     html += '<div class="form_ra right_ra"><div class="form_ra_main define_float"><input type="radio" name="edit_action_' + id + '" id="edit_allow_' + id + '" value="Allow"';
//     if (a == "Allow") html += ' checked="checked"';
//     html += ' /><label for="edit_allow_' + id + '">Allow</label></div></div>';
//    // html += '<div class="sel_h3 define_float">	<h3>Robot</h3></div>';

//     html += '<div class="form_sel define_float"><select id="edit_robot_' + id + '">' + getSelectBox(r) + '</select></div>';
//  //   html += '<div class="files_form_h3 define_float"><h3>Files or Directories</h3></div>';
//     html += '<div class="form_url_main define_float"><input type="text" name="edit_url_' + id + '" id="edit_url_' + id + '" class="input-url" value="' + u + '">';
//     html += '<input type="button" id="copy_rule_' + id + '" value="Copy" class="right-label robot_copy_btn"/>';
//     html += '<input type="button" id="delete_rule_' + id + '" value="Delete" class="right-label robot_delete_btn"/>';
//     html += '<div id="edit_err_' + id + '" class="errors"></div>';
//     html += '</div>';
//     html += '</div>';
   
    return html;
}

function copyExistingrule(id) {
    var aa = jQuery("input[name=edit_action_" + id + "]:checked").val();
    if (!aa) return;

    var rr = jQuery("#edit_robot_" + id).val();
    if (!rr) return;

    var uu = jQuery("#edit_url_" + id).val();
    if (!uu) {
        jQuery("#edit_url_" + id).focus();
        return;
    }

    var new_rule = new robot_txt_rules(aa, rr, uu);
    rules.push(new_rule);
   
   jQuery("#robot-rules").append(columnToCopy(new_rule.id, aa, rr, uu));


   jQuery("#edit_disallow_" + new_rule.id).change(function() {
        update_rule_action(new_rule.id);
    });
    jQuery("#edit_allow_" + new_rule.id).change(function() {
        update_rule_action(new_rule.id);
    });

    jQuery("#edit_robot_" + new_rule.id).change(function() {
        robotRuleUpdate(new_rule.id);
    });

    jQuery("#edit_url_" + new_rule.id).keyup(function() {
        update_rule_url(new_rule.id);
    });

   jQuery("#copy_rule_" + new_rule.id).click(function() {
        copyExistingrule(new_rule.id);
    });

    jQuery("#delete_rule_" + new_rule.id).click(function() {
        delete_rule(new_rule.id);
    });

    updateRobotData();
}

function update_rule_action(id) {
    var aa = jQuery("input[name=edit_action_" + id + "]:checked").val();
    if(aa==undefined){
        aa="Disallow";
    }
    //console.log(aa);
    for (var i in rules) {
        if (rules[i].id == id) {
            rules[i].action = aa;
            break;
        }
    }

    updateRobotData();
}

function delete_rule(id) {
    for (var i in rules) {
        if (rules[i].id == id) {
            rules.splice(i, 1);
            jQuery("#rule_" + id).remove();
            break;
        }
    }

    updateRobotData();
}

function robotRuleUpdate(id) {
    var rr = jQuery("#edit_robot_" + id).val();

    for (var i in rules) {
        if (rules[i].id == id) {
            rules[i].robot = rr;
            break;
        }
    }

    updateRobotData();

}

function update_rule_url(id) {
    var uu = jQuery("#edit_url_" + id).val();
   for (var i in rules) {
        if (rules[i].id == id) {
            rules[i].url = uu;
            break;
        }
    }

    updateRobotData();

}

function updateRobotData() {  
    var error = validateFields();
  

    var nl = "\n";
    //if ($.browser.msie) nl = "\n\r";
    nl = "\n\r";
    var html = "";
    html += "User-Agent: *" + nl;;
    var def = "";

    if (jQuery("input[name=default_action]:checked").val() == "Disallow") {
        def = "Disallow: /" + nl;;
    } 
    else {
        def = "" + nl;;
    }

    // var def = $("input[name=default_action]:checked").val() + ": /"+nl;;
    html += def;

    jQuery.each(robots, function( index, value ) {
        var found = false;
        for (var j in rules) {
            if (rules[j].robot == index && !rules[j].has_errors) {
                if (!found) {
                    found = true;
                    if (rules[j].robot != "*") {
                        if(rules[j].robot=="All"){
                            var dropdown='*';
                        }else{
                            var dropdown=rules[j].robot;
                        }
                        html += nl + "User-Agent: " + dropdown + nl;
                    }
                }
                html += rules[j].action + ": " + rules[j].url + nl;
            }
        }
    });

    var sitemap = jQuery("#sitemap").val(); 
	 jQuery("#sitemap_err").hide();
    if (sitemap != "") {
		if(sitemap.match("((http|https)://)?(www.)?[a-zA-Z0-9@:%._\\+~#?&//=]{2,256}\\.[a-z]{2,6}\\b([-a-zA-Z0-9@:%._\\+~#?&//=]*)")){
			html += nl + "Sitemap: " + jQuery("#sitemap").val() + nl;
		} else{
			jQuery("#sitemap_err").html("Invalid sitemap");
             jQuery("#sitemap_err").show();
		}
        
    }
    jQuery("#robots_txt").text(html);

}

function validateFields(clicked=null) {

    var ar = jQuery("#select_robot").val();
    var added_url = jQuery("#url").val();

    var r = get_selected_robot(ar);

    var err = "";
    if ((!r) && ((added_url.indexOf("*") != -1) || (added_url.indexOf("$") != -1))) {
        err += "This robot doesn't support pattern matching!<br />"
    }

    if (!added_url.match(/^\//) && clicked == 1) {
        jQuery("#updateTable").hide();
        err += "Url should start  with / <br />";
    }

    if (checkIfRuleIsDuplicate(-1, ar, added_url)) {
        err += "Rule already added <br />";
    }


    if (err) {
        jQuery("#add_err").html(err);
        jQuery("#add_err").show();
        return false;
    } else {
        jQuery("#add_err").hide();
    }
	
	 jQuery("#sitemap_err").hide();
    if (jQuery("#sitemap").val() != "") { 
        var sitemap = jQuery("#sitemap").val();
        if (sitemap.match(/^http(s)?\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S+)+$/i)) { console.log('if');
             jQuery("#sitemap_err").hide();
        } else { 
            jQuery("#sitemap_err").html("Invalid sitemap");
             jQuery("#sitemap_err").show();
        };
    } 

    for (var i in rules) {
        err = "";
        ar = jQuery("#edit_robot_" + rules[i].id).val();
        au = jQuery("#edit_url_" + rules[i].id).val();
        r = get_selected_robot(ar);

        if ((!r) && ((au.indexOf("*") != -1) || (au.indexOf("$") != -1))) {
            err += "This robot doesn't support pattern matching!<br />"
        }

        if (!au.match(/^\//)) {
            
            err += "You should start url with / <br />";
        }



        if (checkIfRuleIsDuplicate(rules[i].id, ar, au)) {
            err += "Rule already added <br />";
        }

        if (err) {
            jQuery("#edit_err_" + rules[i].id).html(err);
            if (jQuery("#edit_err_" + rules[i].id).is(":hidden")) jQuery("#edit_err_" + rules[i].id).show("fast");
            rules[i].has_errors = true;
        } else {
            if (!jQuery("#edit_err_" + rules[i].id).is(":hidden")) jQuery("#edit_err_" + rules[i].id).hide("fast");
            rules[i].has_errors = false;
        }

    }

    

    return true;

}

function checkIfRuleIsDuplicate(id, robot, url) {
    for (var i in rules) {
        if ((rules[i].id != id) && (rules[i].robot == robot) && (rules[i].url.toLowerCase() == url.toLowerCase())) {
            return true;
        }
    }
    return false;
}

function get_selected_robot(name) {
   var patterMatch = 0;
    jQuery.each(robots, function( index, value ) {
      if (name == index) {
             patterMatch = value;
        }
    });
    return patterMatch;
}

jQuery(document).ready(function() {
    jQuery("#updateTable").hide();
    updateRobotData();
    jQuery("#select_robot").append(getSelectBox('All'));
   jQuery("#default_disallow").change(function() {
        updateRobotData();
    });
    jQuery("#default_allow").change(function() {
        updateRobotData();
    });

    jQuery("#select_robot").change(function() {
        validateFields();
        
    });

    jQuery("#url").keyup(function() {
        validateFields();
    });

    jQuery("#sitemap").keyup(function() { 
        updateRobotData();
    });

    jQuery("#add_rule").click(function() {
		
		
        jQuery("#updateTable").show(); 
        
        var error = validateFields(1); 
        if(error == false){
            return false;
        }  
        var a = jQuery("input[name=add_action]:checked").val();
        if (!a) return;

        var r = jQuery("#select_robot").val();
        if (!r) return;

        var u = jQuery("#url").val();
        if (!u) {
            jQuery("#url").focus();
            return;
        }

        if (checkIfRuleIsDuplicate(-1, r, u)) {
            jQuery("#url").focus();
            return;
        }

        var rule = new robot_txt_rules(a, r, u);
        rules.push(rule);
       
       
        jQuery("#abc").append(columnToCopy(rule.id, a, r, u));
        
        jQuery("#edit_disallow_" + rule.id).change(function() {
            update_rule_action(rule.id);
        });
        jQuery("#edit_allow_" + rule.id).change(function() {
            update_rule_action(rule.id);
        });

        jQuery("#edit_robot_" + rule.id).change(function() {
            robotRuleUpdate(rule.id);
        });

        jQuery("#edit_url_" + rule.id).keyup(function() {
            update_rule_url(rule.id);
        });

        jQuery("#copy_rule_" + rule.id).click(function() {
            copyExistingrule(rule.id);
        });

       jQuery("#delete_rule_" + rule.id).click(function() {
          console.log(rules.length);
           delete_rule(rule.id);
           if(rules.length==0){
            jQuery("#updateTable").hide();
           }
           

        });

        jQuery("#select_robot").val("All");
        jQuery("#url").val("");

        updateRobotData();
		
		
		
		
    });

});