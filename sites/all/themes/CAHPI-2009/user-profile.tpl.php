<h2><?php print $account->profile_company; ?></h2>
<div id="inspector_profile">
 <div id="picture" class="inspector_photo"><?php strlen($account->picture) > 0? print '<img src="/' . $account->picture . '" />':print ''; ?></div>
 <div id="profile_info">
   <ul>
     <li><strong><?php print $account->profile_firstname . " " . $account->profile_lastname;?></strong></li>
     <li>National Certification: <?php strlen($account->profile_nch) > 0?print $account->profile_nch: print "No";?></li>
     <li>Level of Certification: <?php print $account->profile_level;?></li>
     <li>Phone: <?php print $account->profile_phone;?></li>
     <li>Fax: <?php print $account->profile_fax;?></li>
     <li>email: <?php print '<a href"mailto:' . $account->mail . '>' . $account->mail . '</a>';?></li>
     <li>website: <?php print '<a href"' . $account->profile_website . '>' . $account->profile_website . '</a>';?></li>
     <li>Located in: <?php print $account->profile_province;?></li>
     <li>Business Area: <?php print $account->profile_locations;?></li>
   </ul>
 </div>
 <?php strlen($account->profile_description) > 0?print $account->profile_description: print "";?> 
</div>