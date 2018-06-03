<?php

/**
 * Localize strings for javascript
 */

$accept  = __( 'Yes, proceed', 'cornerstone' );
$decline = __( 'No, take me back', 'cornerstone' );

return array(

  // 'integration-mode'         => 'pro',
  'editor-tab-logo-path'        => 'svg/logo-flat-custom', // Pro: 'svg/logo-flat-content'
	'edit-with-cornerstone'       => __( 'Edit with Cornerstone', 'cornerstone' ),
  'visual-tab'                  => __( 'Visual', 'cornerstone' ),
  'text-tab'                    => __( 'Text', 'cornerstone' ),
	'cornerstone-tab'             => __( 'Cornerstone', 'cornerstone' ),
	'insert-cornerstone'          => __( 'Insert Shortcode', 'cornerstone' ),
	'updating'                    => __( 'Updating', 'cornerstone' ),
	'confirm-yep'                 => __( 'Yep', 'cornerstone' ),
	'confirm-nope'                => __( 'Nope', 'cornerstone' ),
	'manual-edit-warning'         => __( 'Hold up! You&apos;re welcome to make changes to the content. However, these will not be reflected in Cornerstone. If you edit the page in Cornerstone again, any changes made here will be overwritten. Do you wish to continue?', 'cornerstone' ),
	'overwrite-warning'           => __( 'Hold up! The content has been modified outside of Cornerstone. Editing in Cornerstone will replace the current content. Do you wish to continue?', 'cornerstone' ),
	'manual-edit-accept'          => $accept,
	'manual-edit-decline'         => $decline,
	'overwrite-accept'            => $accept,
	'overwrite-decline'           => $decline,
	'default-title'               => __( 'Cornerstone Draft', 'cornerstone'),

  'dashboard-title'                  => CS()->common()->properTitle(),
  'dashboard-menu-title'             => __( 'Home', 'cornerstone'),
  'dashboard-settings-title'         => __( 'Settings', 'cornerstone' ),
  'dashboard-settings-path'          => 'cornerstone-settings',
  'dashboard-settings-update'        => __( 'Update', 'cornerstone' ),
  'dashboard-settings-save-title'    => __( 'Save Settings', 'cornerstone' ),
  'dashboard-settings-save-update'   => __( 'Update', 'cornerstone' ),
  'dashboard-settings-save-info'     => __( 'Once you are satisfied with your settings, click the button below to save them.', 'cornerstone' ),
  'dashboard-settings-save-updating' => __( 'Updating&hellip;', 'cornerstone' ),
  'dashboard-settings-save-updated'  => __( 'Settings Saved!', 'cornerstone' ),
  'dashboard-settings-save-error'    => __( 'Sorry! Unable to Save', 'cornerstone' ),

  'dashboard-settings-system-title' => __( 'System', 'cornerstone' ),

  'dashboard-settings-system-clear-style-cache-title' => __( 'Clear Style Cache', 'cornerstone' ),
  'dashboard-settings-system-clear-style-cache-description' => __( 'For quicker page loads V2 Elements will remember the CSS generated when they were last saved. This is automatically cleared when Cornerstone is updated. It may be useful to clear manually if any V2 Elements are missing styling.', 'cornerstone' ),
  'dashboard-settings-system-clear-style-cache-button'      => __( 'Clear Style Cache', 'cornerstone' ),
  'dashboard-settings-system-clear-style-cache-button-clearing' => __( 'Clearing&hellip;', 'cornerstone' ),
  'dashboard-settings-system-clear-style-cache-button-cleared'  => __( 'Cleared!', 'cornerstone' ),
  'dashboard-settings-system-clear-style-cache-button-error'    => __( 'Unable to clear!', 'cornerstone' ),

  'permissions.title'            => __( 'Permissions', 'cornerstone' ),
  'permissions.preferences'      => __( 'User Preferences', 'cornerstone' ),
  'permissions.general'          => __( 'General', 'cornerstone' ),
  'permissions.v2-elements'      => __( 'V2 Elements', 'cornerstone' ),
  'permissions.classic-elements' => __( 'Classic Elements', 'cornerstone' ),
  'permissions.elements'         => __( 'Elements', 'cornerstone' ),
  'permissions.feature'          => __( 'Feature', 'cornerstone' ),
  'permissions.name'             => __( 'Name', 'cornerstone' ),
  'permissions.allow'            => __( 'Allow', 'cornerstone' ),
  'permissions.access'           => __( 'Access', 'cornerstone' ),
  'permissions.config'           => __( 'Configure', 'cornerstone' ),
  'permissions.close'            => __( 'Close', 'cornerstone' ),
  'permissions.additional'       => __( 'Additional Permissions', 'cornerstone' ),
  'permissions.enabled'          => __( 'Enabled', 'cornerstone' ),
  'permissions.enable-access'    => __( 'Enable access before setting additional permissions.', 'cornerstone' ),
  'permissions.set-additional'   => __( 'Click to set additional permissions.', 'cornerstone' ),
  'permissions.toggle-all'       => __( 'Toggle All Permissions', 'cornerstone' ),
  'permissions.macros'           => __( 'Macros', 'cornerstone' ),
  'permissions.macros-label'     => __( 'Make a Selection', 'cornerstone' ),
  'permissions.macros-desc'      => __( 'Applying a macro will automatically configure multiple permissions to achieve a desired effect.', 'cornerstone' ),
  'permissions.macros-apply'     => __( 'Apply', 'cornerstone' ),
  'permissions.macros-warning'   => __( 'This will alter your currently selected permissions for this role. Would you like to continue?', 'cornerstone' ),
  'permissions.macros-continue'  => __( 'Yes, Proceed', 'cornerstone' ),
  'permissions.macros-go-back'   => __( 'No, Go Back', 'cornerstone' ),

  'permissions.macro-text-only'                => __( 'Enforce Text Only', 'cornerstone' ),
  'permissions.macro-disable-preferences'      => __( 'Disable User Preferences', 'cornerstone' ),
  'permissions.macro-enable-v2-elements'       => __( 'Enable All V2 Elements', 'cornerstone' ),
  'permissions.macro-disable-v2-elements'      => __( 'Disable All V2 Elements', 'cornerstone' ),
  'permissions.macro-enable-classic-elements'  => __( 'Enable All Classic Elements', 'cornerstone' ),
  'permissions.macro-disable-classic-elements' => __( 'Disable All Classic Elements', 'cornerstone' ),
  'permissions.macro-reset'                    => __( 'Reset to Defaults', 'cornerstone' ),

  'permissions.preference-user' => __( 'User Preference', 'cornerstone' ),
  'permissions.preference-on'   => __( 'Always On', 'cornerstone' ),
  'permissions.preference-off'  => __( 'Always Off', 'cornerstone' ),

  'permissions.inspect'            => __( 'Inspect', 'cornerstone' ),
  'permissions.show-in-library'    => __( 'Show In Library','cornerstone' ),
  'permissions.apply-preset'       => __( 'Apply Preset', 'cornerstone' ),
  'permissions.save-preset'        => __( 'Save Preset', 'cornerstone' ),
  'permissions.design-controls'    => __( 'Design Controls', 'cornerstone' ),
  'permissions.customize-controls' => __( 'Customize Controls', 'cornerstone' ),

  'permissions.create' => __( 'Create', 'cornerstone' ),
  'permissions.change' => __( 'Change', 'cornerstone' ),
  'permissions.rename' => __( 'Rename', 'cornerstone' ),
  'permissions.delete' => __( 'Delete', 'cornerstone' ),

  'permissions.manage-google'  => __( 'Manage Google', 'cornerstone' ),
  'permissions.manage-typekit' => __( 'Manage Typekit', 'cornerstone' ),

  'permissions.create-from-template'   => __( 'Create From Template', 'cornerstone' ),
  'permissions.save-as-template'       => __( 'Save As Template', 'cornerstone' ),
  'permissions.manage-assignments'     => __( 'Manage Assignments', 'cornerstone' ),
  'permissions.elements-create'        => __( 'Add Elements', 'cornerstone' ),
  'permissions.elements-delete'        => __( 'Delete Elements', 'cornerstone' ),
  'permissions.elements-move'          => __( 'Move Elements', 'cornerstone' ),
  'permissions.elements-inspect'       => __( 'Inspect Elements', 'cornerstone' ),

  'permissions.publish'                => __( 'Publish', 'cornerstone' ),
  'permissions.insert-templates'       => __( 'Insert Templates', 'cornerstone' ),
  'permissions.save-templates'         => __( 'Save Templates', 'cornerstone' ),
  'permissions.manage-layout'          => __( 'Manage Layout', 'cornerstone' ),
  'permissions.apply-presets'          => __( 'Apply Presets', 'cornerstone' ),
  'permissions.save-presets'           => __( 'Save Presets', 'cornerstone' ),
  'permissions.edit-custom-css'        => __( 'Edit Custom CSS', 'cornerstone' ),
  'permissions.edit-custom-js'         => __( 'Edit Custom JS', 'cornerstone' ),
  'permissions.settings'               => __( 'Access Settings', 'cornerstone' ),
  'permissions.skeleton-mode'          => __( 'Skeleton Mode', 'cornerstone' ),

  'permissions.import'                 => __( 'Import', 'cornerstone' ),
  'permissions.download'               => __( 'Download', 'cornerstone' ),
  'permissions.update-preview-image'   => __( 'Update Preview Image', 'cornerstone' ),
  'permissions.hide'                   => __( 'Hide', 'cornerstone' ),
  'permissions.manage-default-presets' => __( 'Manage Default Presets', 'cornerstone' ),
  'permissions.design-cloud'           => __( 'Access Design Cloud', 'cornerstone' ),

  'plugin-update-nothing'   => __( 'Nothing to report.', 'cornerstone' ),
  'plugin-update-new'       => __( 'New version available!', 'cornerstone' ),
  'plugin-update-error'     => __( 'Unable to check for updates. Try again later.', 'cornerstone' ),
  'plugin-update-checking'  => __( 'Checking&hellip;', 'cornerstone' ),
  'plugin-update-changelog' => __( 'Visit the <a href="http://theme.co/changelog/#cornerstone">Themeco Changelog</a> for more information.', 'cornerstone' ),
  'plugin-update-notice'    => __( '<a href="%s">Validate to enable automatic updates</a>', 'cornerstone' ),

  'validation-global-notice'   => __( 'This Cornerstone license is ​<strong>not validated</strong>​. <a href="%s">Fix</a>.', 'cornerstone' ),
  'validation-verifying'       => __( 'Verifying license&hellip;', 'cornerstone' ),
  'validation-couldnt-verify'  => __( '<strong>Uh oh</strong>, we couldn&apos;t check if this license was valid. <a data-tco-error-details href="#">Details.</a>', 'cornerstone' ),
  'validation-congrats'        => __( '<strong>Congratulations!</strong> Cornerstone is now validated for this site!', 'cornerstone ' ),
  'validation-go-back'         => __( 'Go Back', 'cornerstone' ),
  'validation-login'           => __( 'Login or Register', 'cornerstone' ),
  'validation-manage-licenses' => __( 'Manage Licenses', 'cornerstone'),
  'validation-revoke-confirm'  => __( 'By revoking validation, you will no longer receive automatic updates. The site will still be linked in your Themeco account, so you can re-validate at anytime.<br/><br/> Visit "Licenses" in your Themeco account to transfer a license to another site.', 'cornerstone' ),
  'validation-revoke-accept'   => __( 'Yes, revoke validation', 'cornerstone' ),
  'validation-revoke-decline'  => __( 'Stay validated', 'cornerstone' ),
  'validation-revoking'        => __( 'Revoking&hellip;', 'cornerstone' ),
  'validation-revoked'         => __( '<strong>Validation revoked.</strong> You can re-assign licenses from <a href="%s" target="_blank">Manage Licenses</a>.', 'cornerstone' ),
  'validation-msg-invalid'     => __( 'We&apos;ve checked the code, but it <strong>doesn&apos;t appear to be an Cornerstone purchase code or Themeco license.</strong> Please double check the code and try again.', 'cornerstone' ),
  'validation-msg-new-code'    => __( 'This looks like a <strong>brand new purchase code that hasn&apos;t been added to a Themeco account yet.</strong> Login to your existing account or register a new one to continue.', 'cornerstone' ),
  'validation-msg-cant-link'   => __( 'Your code is valid, but <strong>we couldn&apos;t automatically link it to your site.</strong> You can add this site from within your Themeco account.', 'cornerstone' ),
  'validation-msg-in-use'      => __( 'Your code is valid but looks like it has <strong>already been used on another site.</strong> You can revoke and re-assign within your Themeco account.', 'cornerstone' ),

  'tco-connection-error' => __( 'Could not establish connection. For assistance, please start by reviewing our article on troubleshooting <a href="https://theme.co/apex/kb/connection-issues/">connection issues.</a>', 'cornerstone' ),

  'huebert-select-color' => __( 'Select Color', 'cornerstone' ),

  'x-shortcodes-notice' => __( '<strong>X &ndash; Shortcodes has been deactivated</strong>. This plugin is no longer a requirement of X, and can safely be deleted.', 'cornerstone' ),

);
