Magento Snippets
Magento IDE Code Snippets for Eclipse PDT / Zend Studio / NetBeans
http://magento-snippets.googlecode.com/
Brought by Yury Ksenevich http://www.spadar.com/



TABLE OF CONTENTS:

1.   Prodject Description
2.   Requirements
3.   Eclipse Installation
4.   Eclipse Version Update
5.   Developer Guide
5.1      XML Configs
5.2      PHP Configs



1.   PROJECT DESCRIPTION

This project is intended to help Magento developers by adding hints to their IDE (Eclipse PDT / Zend Studio) for most reusable pieces of code.

It contains XML templates for Configuration and layouts blocks in Magento.

2. REQUIREMENTS

    Eclipse based PHP IDE (PDT or Zend Studio)
    NetBeans IDE 

3.   ECLIPSE INSTALLATION

    1) open Window > Preferences > XML > XML Files > Editor > Templates
    2) click "Import" and choose eclipse_xml_templates.xml
    3) use by typing mage_ in your XML files
    4) to install PHP snippets do the same operations in Window > Preferences > PHP > Editor > Templates, use file eclipse_php_templates.xml 

3.   ECLIPSE VERSION UPDATE

    In order to update XML or PHP snippets you need to remove all old snippets prefixed with "mage". If you don't remove old snippets, IDE will suggest the same snippet multiple times. 

4. NETBEANS INSTALLATION AND VERSION UPDATE

    1) open Tools > Options > Editor > Code Templates
    2) Click "Import" button at the bottom of the window
    3) Browse package file netbeans-magento-snippets.zip, click "Ok"
    4) Check "All" checkbox, click "Ok"
    5) Confirm IDE restart with "Yes"
    6) To update Magento Snippets repeat the same process with new package
    
    

5.   DEVELOPER GUIDE

5.1      XML CONFIGS

    mage_module - create module definition in app/etc/modules/<Vendor>_<Module>.xml
    mage_config - create module configs in app/code/local/<Vendor>/<Module>/etc/config.xml
    mage_config_admin_routers - define a new admin router that handles controllers. Use in config/admin XML-path
    mage_config_admin_routers_override - define an override admin router.
        overriden_module - is alias of the overridden module,
        overrider_module - is alias of your module,
        Mage_Adminhtml - default controller class preffix (it is supposed that you override adminhtml module),
        base_class - your module' controller preffix, 

        Magento-Snippets guides to create a app/code/local/<Vendor>/<Module>/controllers/Adminhtml/ directory by default for your overrider controllers. Use in config/admin/routers XML-path 

    mage_config_global_events - create an event observer for global scope. Use in config/global XML-path
    mage_config_global_resources_setup_eav - Add EAV class to use as context in module setup scripts. Use in config/global/resources/<modulealias>_setup/setup XML-path
    mage_config_global_template_email - create sales email template definition. Use in config/global XML-path
    mage_config_crontab - define and schedule cron job. Use in config/global XML-path
    mage_config_adminhtml_layout - define admin design layout file. Use in config/adminhtml XML-path
    mage_config_adminhtml_menu - add an item to admin menu. Use in config/adminhtml/menu or config/adminhtml/menu/<root_item>/children/<some_child_item>/children XML-paths
    mage_config_adminhtml_translate - define translation CSV for backend. Use in config/adminhtml XML-path
    mage_config_adminhtml_acl - Create Access control list for admin configuration page(s). Use in config/adminhtml XML-path
    mage_config_adminhtml_events - create an event observer for admin scope. Use in config/adminhtml XML-path
    mage_config_frontend_events - create an event observer for frontend scope. Use in config/frontend XML-path
    mage_config_frontend_layout - define frontend design layout file. Use in config/frontend XML-path
    mage_config_frontend_routers_standard - define a new frontend router that handles controllers. Use in config/frontend XML-path
    mage_config_frontend_routers_override - define an override frontend router.
        overriden_module - is alias of the overridden module,
        overrider_module - is alias of your module,
        module - core module name for override. You can replace Mage_ as well to override thirdpary modules
        base_class - your module' controller preffix, 

        Use in config/frontend/routers XML-path 

    mage_config_frontent_translate - define translation CSV for backend. Use in config/frontend XML-path
    mage_config_default_email - Required default values for email template configs. Use in config/default/<system_section>/<system_group> XML-path 
    mage_config_global_fieldsets_address - define custom customer address attribute to be copied from quote to order and from address book to quote 

    mage_system - create system configs file structure in app/code/local/<Vendor>/<Module>/etc/system.xml
        section - new section with configuration params (sidebar menu item on System -> Configuration page) Also can use already defined or core section, in this case you need to delete all children except groups tag.
        module - module alias, only for newly created sections
        general_customer_catalog_sales - choose one of predefined section groups
        label - section menu label
        mage_system_group - snippet hint for new group inside section 
    mage_system_group - Create system configs group. Also can use already defined or core group, in this case you need to delete all children except fields tag.
        group - group code
        module - module alias, only for newly created sections
        label - group label
        mage_system_group_field - snippet hint for new config field inside group. It will suggest to choose either mage_system_group_field_select or mage_system_group_text. 
    mage_system_group_field_select - drop-down field config definition
        field - field alias
        label - field label
        module - module alias for source (field options values) and backend (field validation). For standard values use adminhtml.
        model - model class suffix for custom validation and options.
        sort - field oprder inside group 
    mage_system_group_field_text - text field config definition
        field - field alias
        label - field label
        module - module alias for source (field options values) and backend (field validation). For standard values use adminhtml.
        model - model class suffix for custom validation and options.
        sort - field oprder inside group 
    mage_system_sections_groups_email_fields - config fields for email template sending options. It requires two fields: sender identity and email template.
        email - email template name 

    mage_layout_block - define a new root block with all possible attributes, block will be rendered directly into html root
    mage_layout_head_action_addCss - load css file to head from appropriate skin directory. Use inside <reference name="head" ></reference>
    mage_layout_head_action_addJs - load a file from js directory. Use inside <reference name="head" ></reference>
    mage_layout_head_action_addSkinJs - load a file from appropriate skin directory. Use inside <reference name="head" ></reference>
    mage_layout_reference_action_insert - insert already defined block by its name attribute in the end of blocks stack
    mage_layout_reference_action_insert_after - insert already defined block by its name attribute after appropriate block
    mage_layout_reference_action_insert_before - insert already defined block by its name attribute in the beginning of blocks stack
    mage_layout_reference_action_setTemplate - set new template for reference block
    mage_layout_reference_block - define child block inside a reference block
    mage_layout_remove - remove already defined block by it's name
    mage_layout_root_action_setTemplate - change page layout defined in default handle
        template - appropriate values: 1column, 2columns-left, 2columns-right, 3columns 
    mage_layout_update - use all values that are defined in another layout handle
        action - another layout handle name 

5.2      PHP configs

    mage_model - model class with database table initialization
    mage_model_mysql4 - resource model class with database table initialization
    mage_model_mysql4_collection - collection model class with database table initialization
    mage_admin_grid_container - create a grid container class with button and controller definitions 

    mage_setup - create structure for default module sql setup script
    mage_setup_eav - create structure for module sql setup script that uses EAV.
    mage_setup_eav_addAttribute - define a new attribute in EAV structure
        customer__customer_address__catalog_category__catalog_product__order__invoice__creditmemo__shipment__rma_item - attribute entity type, choose one of listed
        attribute_code - new attribute code
        int_static_varchar_datetime_text_decimal - backend EAV type (value type)
        select_text_date_hidden - input type that is used to display attribute
        Label - attribute label 
    mage_setup_eav_addAttribute_customer - define a new customer or customer_address attribute in EAV structure
        customer__customer_address - attribute entity type, choose one of listed
        attribute_code - new attribute code
        int_static_varchar_datetime_text_decimal - backend EAV type (value type)
        select_text_date_hidden - input type that is used to display attribute
        Label - attribute label 
    mage_setup_eav_addAttribute_product - define a new product attribute in EAV structure
        attribute_code - new attribute code
        int_static_varchar_datetime_text_decimal - backend EAV type (value type)
        select_text_date_hidden - input type that is used to display attribute
        Label - attribute label
        all_simple_configurable_virtual_grouped_bundle - apply to types of products. Use comma to separate values 
    mage_setup_eav_addAttribute_product_yesno - define a new product attribute with yes/no type in EAV structure
        attribute_code - new attribute code
        Label - attribute label
        all_simple_configurable_virtual_grouped_bundle - apply to types of products. Use comma to separate values 
    mage_setup_eav_addAttribute_product_select - define a new dropdown product attribute in EAV structure
        attribute_code - new attribute code
        Label - attribute label
        all_simple_configurable_virtual_grouped_bundle - apply to types of products. Use comma to separate values 

    deb - add debug statement Zend_Debug::dump() 
