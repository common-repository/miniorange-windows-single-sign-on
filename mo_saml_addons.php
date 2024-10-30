<?php
function mo_saml_show_addons_page(){
	?>
    <div style="background-color:#FFFFFF; border:1px solid #CCCCCC; padding:0px 2% 0px 2%;">
        <h3><b>SAML 2.0 Plugin Add-ons</h3>
        <hr>
        <p style="font-weight: normal;">Along with the SSO plugin we provide the following add-ons. These add-ons can be purchased separately with all the licensing plans. For more details of the licensing plans, <a href="<?php echo add_query_arg( array( 'tab' => 'licensing' ), htmlentities( $_SERVER['REQUEST_URI'] ) ); ?>"><b>CLICK HERE</b></a></p>

        <table class="widefat fixed" cellspacing="0">
            <thead style="background: lightblue;">
            <tr>
                <th style="width:15%">
                    Add-On
                </th>
                <th style="width:40%">
                    Description
                </th>
                
                
            </tr>
            </thead>
            <tbody>
            <tr class="alternate">
                <td>Page Restriction</td>
                <td style="font-weight: normal;">This add-on is basically used to protect the pages/posts of your site with IDP login page
                    and also, restrict the access to pages/posts of the site based on the user roles.<br /><br />
                    <b>Before Login:</b> Site Admin can mark the pages/posts to be private. If the user tries to access these private marked pages/posts without being logged in
                    then user will be redirected to IDP login page. User can access these pages/post only after authenticated from IDP.
                    The pages/post that are not marked private can be accesses by the user without logging into the site.<br /><br />
                    <b>After Login:</b> The site admin can decide the content to be visible/accessed by the user based on their roles in the site.
                    Site Admin can mark the pages/posts to be accesses by certain roles of the site. So, once the user is logged into the site, the user can access
                    a particular page or post if the site admin has given the access capability to that role. </td>
              
            </tr>
            <tr>
                <td>BuddyPress Integration</td>
                <td style="font-weight: normal;">This add-on maps the attributes fetched from the IdP with BuddyPress attributes.
                    By default, attribute mapping is done with the attributes that are stored in the WordPress default <b><i>`user_meta`</i></b> table.
                    If you are using the <b><a href="https://wordpress.org/plugins/bp-xprofile-custom-field-types/" target="_blank">BuddyPress plugin</a></b> and looking for a solution where you can map the attributes fetched from the IdP to the BuddyPress then
                    you can opt-in for this add-on.</td>
               
            </tr>
            <tr class="alternate">
                <td>LearnDash Integration</td>
                <td style="font-weight: normal;">LearnDash is popular WordPress LMS plugin. If you want to integrate LearnDash with your IDP
                    then you can opt-in for this add-on. This add-on will map the IdP attributes to the LearnDash attributes.</td>
              
            </tr>
            <tr>
                <td>SSO Login Audit</td>
                <td style="font-weight: normal;">SSO Login Audit captures all the SSO users and will generate the reports.</td>
            </tr>
            <tr class="alternate">
                <td>ABR<br/>(Attribute Based Redirection)</td>
                <td style="font-weight: normal;">ABR add-on helps you to redirect your users to different pages after they log into your site, based on the attributes sent by your Identity Provider.</td>
              
            </tr>
            </tbody>
        </table>
        <br /><br />
    </div>
	<?php
}
?>