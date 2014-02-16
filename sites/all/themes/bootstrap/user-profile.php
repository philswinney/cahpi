<?php
/**
 * Created by Phil Swinney
 * User: philswinney
 * Date: 11/14/13
 * Time: 2:01 PM
 *
 */

?>

<div class="profile"<?php print $attributes; ?>>
    <h3>Welcome to your CAHPI Profile Page</h3>
    <p>On the top site you can see a number of Extranet pages that are only available when logged into the site. The Articles section contains recent CAHPI news and articles on Home Inspection best practices. The calendar highlights
    important CAHPI meeting dates. The Inspector's forum is a place where you can share information on home inspection with fellow CAHPI Inspectors.</p>
    <p>It's extremely important that you update your user profile information so that CAHPI can maintain your membership status. Please go to the "My Account" section and make sure all
    your information is up-to-date. Upload your proof of certification documents and ensure all your licensing information is current.</p>
    <p>The RO insurance is a mandatory requirement for all CAHPI Inspectors. Please make sure you've completed this field in the "Certification" section.</p>
    <p>If you have any questions please email us at <a href="mailto:info@cahpi-atl.com">info@cahpi-atl.com</a></p>
    <?php print render($user_profile); ?>
</div>
