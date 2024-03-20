<?php
// Create XML document
$xml = new DOMDocument('1.0', 'UTF-8');
$xml->formatOutput = true;

// Create root element <ABC College>
$abcCollege = $xml->createElement('ABC_College');
$xml->appendChild($abcCollege);

// Create <Computer_Application_Department> element
$compAppDept = $xml->createElement('Computer_Application_Department');
$abcCollege->appendChild($compAppDept);

// Create <Course> element and add value
$course = $xml->createElement('Course', 'BCA(Science)');
$compAppDept->appendChild($course);

// Create <Student_Strength> element and add value
$studentStrength = $xml->createElement('Student_Strength', '80');
$compAppDept->appendChild($studentStrength);

// Create <Number_of_Teachers> element and add value
$teachers = $xml->createElement('Number_of_Teachers', '12');
$compAppDept->appendChild($teachers);

// Output XML
echo $xml->saveXML();
?>
