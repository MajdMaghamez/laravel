<?php namespace resources\gui\menu;

    class main
    {
        public function __construct ( $parent = "", $child = "")
        {
            $this->navbar =
                [
                    0   =>
                        [
                            "ID"        => "HOME",
                            "TITLE"     => "Home",
                            "ACTIVE"    => "",
                            "ICON"      => "",
                            "CHILDREN"  => ARRAY ( )
                        ]
                ];

            switch ( $parent )
            {
                case 'views'        : $this->navbar [0]['ACTIVE'] = " active"; break;
            }
        }
    }