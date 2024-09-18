<?php 

namespace App\Service;

class XmlReader
{
    /**
     * Converts an XML string to a multi-level array.
     *
     * @param string $xmlString
     * @return array
     * @throws \Exception
     */
    public function xmlToArray(string $xmlString): array
    {
        // Load XML string
        $xml = simplexml_load_string($xmlString, 'SimpleXMLElement', LIBXML_NOCDATA);

        if ($xml === false) {
            throw new \Exception('Failed to parse XML string.');
        }

        // Convert XML to array
        return $this->convertXmlToArray($xml);
    }

    /**
     * Recursive function to convert SimpleXMLElement to array.
     *
     * @param \SimpleXMLElement $xml
     * @return array
     */
    private function convertXmlToArray(\SimpleXMLElement $xml)
    {
        $array = [];

        foreach ($xml->children() as $element) {
            $childArray = $this->convertXmlToArray($element);
            
            // Handle the case where the element has multiple items with the same name
            $elementName = $element->getName();

            if (!isset($array[$elementName])) {
                $array[$elementName] = $childArray;
            } else {
                if (!is_array($array[$elementName]) || !isset($array[$elementName][0])) {
                    // Convert to an array if it's not already
                    $array[$elementName] = [$array[$elementName]];
                }

                // Append the new child
                $array[$elementName][] = $childArray;
            }
        }

        // If it's a leaf node, return the string value
        if (empty($array)) {
            return (string) $xml;
        }

        return $array;
    }

}
