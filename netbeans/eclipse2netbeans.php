<?php

function eclipse2netbeans($eclipsePath, $netbeansPath)
{
    $eclipseXml  = new SimpleXMLElement($eclipsePath, null, true);
    $netbeansXml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE codetemplates PUBLIC "-//NetBeans//DTD Editor Code Templates settings 1.0//EN" "http://www.netbeans.org/dtds/EditorCodeTemplates-1_0.dtd"><codetemplates />');

    foreach ($eclipseXml->template as $eclipseTemplateXml)
    {
        $netbeansTemplateXml = $netbeansXml->addChild('codetemplate');
    
        $netbeansTemplateXml->addAttribute('abbreviation', (string)$eclipseTemplateXml['name']);
        $netbeansTemplateXml->addAttribute('xml:space', 'preserve');
        $codeXml = $netbeansTemplateXml->addChild('code');

        $codeDom = dom_import_simplexml($codeXml);
        $docDom  = $codeDom->ownerDocument;
        $codeDom->appendChild($docDom->createCDATASection((string)$eclipseTemplateXml));

        $description = (string)$eclipseTemplateXml['description'];

        if ($description)
        {
            $descriptionXml = $netbeansTemplateXml->addChild('description');
            $descriptionDom = dom_import_simplexml($descriptionXml);
            $descriptionDom->appendChild($docDom->createCDATASection($description));
        }
    }

    if (!file_exists($netbeansPath))
    {
        if (!is_dir(dirname($netbeansPath)))
        {
            mkdir(dirname($netbeansPath), 0644, true);
        }
    }

    $netbeansXml->asXML($netbeansPath);
}

eclipse2netbeans(dirname(dirname(__FILE__)).'/eclipse_xml_snippets.xml', dirname(__FILE__).'/package/config/Editors/text/xml/CodeTemplates/org-netbeans-modules-editor-settings-CustomCodeTemplates.xml');
eclipse2netbeans(dirname(dirname(__FILE__)).'/eclipse_php_snippets.xml', dirname(__FILE__).'/package/config/Editors/text/x-php5/CodeTemplates/org-netbeans-modules-editor-settings-CustomCodeTemplates.xml');
