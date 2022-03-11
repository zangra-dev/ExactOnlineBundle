<?php

namespace ExactOnlineBundle\Manager;

interface ExactXmlApiInterface
{
    // Get next parts if available (default: no)
    public const GET_PARTS = 'get_parts';

    // Save all part in a returned collection.
    // Memory monster (default: no)
    public const COLLECT_ALL_PARTS = 'collect_all_parts';

    // Save as XML file(s) (default: no)
    public const FILE_OPTION_SAVE = 'file_option_save';

    // Return as a SimpleXml object (default: yes)
    // else a raw response body ie returned
    public const RETURN_SIMPLE_XML = 'return_simple_xml';

    // Verbose (default: no)
    public const VERBOSE = 'verbose';

    public const OPTIONS = [self::GET_PARTS, self::FILE_OPTION_SAVE, self::RETURN_SIMPLE_XML, self::COLLECT_ALL_PARTS, self::VERBOSE];
}
