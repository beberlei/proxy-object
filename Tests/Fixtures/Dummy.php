<?php

namespace {

    class Dummy
    {

        public $arms = array('left' => 'left arm', 'right' => 'right arm');

        protected $nervs = array();

        protected function getArm($position)
        {
            return $this->arms[$position];
        }

    }

    class DummyAllPublic
    {
        public function test()
        {
            return test;
        }
    }


    final class finalDummy
    {
        public function test()
        {
            return;
        }
    }

    interface DummyInterface
    {
        public function test();
    }

    class DummyWithConstructor
    {
        public function __construct($beastie, array $os, \lapistano\Tests\ProxyObject\DummyNS $dummy)
        {
            return;
        }
    }

}

namespace lapistano\Tests\ProxyObject {

    class DummyNS
    {

        public $arms = array('left' => 'left arm', 'right' => 'right arm');

        protected $nervs = array();

        private $myPrivate;

        public function __construct($foo = '', array $os = array())
        {
            return;
        }

        public function getArms()
        {
            return array_values($this->arms);
        }

        protected function getArm($position, $foo = '')
        {
            return $this->arms[$position];
        }

        protected function getArmNS(\stdClass $dom)
        {
            return $this->arms['left'];
        }

        protected function setArms(array $arms = array())
        {
            $this->arms = $arms;
        }

        protected static function arms()
        {
            return;
        }

        protected final function armsFinal()
        {
            return;
        }
    }

    class DummyNSnoConstruct
    {
        public $arms = array('left' => 'left arm', 'right' => 'right arm');

        protected $nervs = array();

        private $myPrivate = array();

        public function getArms()
        {
            return array_values($this->arms);
        }
    }

    class DummyNSwithStatic
    {
        public $arms = array('left' => 'left arm', 'right' => 'right arm');

        protected static $myStatic = 'tux';
        protected $myProtectedFloat = 1.234;
        protected $myProtected = 'beastie';

        private $myPrivate = array();

        protected function &getArm($position, $foo = '')
        {
            return $this->arms[$position];
        }
    }
}
