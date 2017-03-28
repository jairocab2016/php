<?php

namespace PlatziPHP;


	class User
    {
        /**
         * @type String
         */
		protected $email;

        /**
         * @type String
         */
        protected $password;

        /**
         * @type String
         */
        protected $firstName;

        /**
         * @type String
         */
        protected $lastName;


		public function __construct($anemail, $password)
        {


			$this->email=$anemail;
			$this->password= password_hash($password, PASSWORD_DEFAULT);
		}

        /**
         * @param string $firstName
         * @param string $lastName
         */
        public function setName($firstName, $lastName)
        {

			$this->firstName=$firstName;
			$this->lastName=$lastName;

		}

        /**
         * @return String
         */
        public function getFirstName()
        {

            return $this->firstName;
        }
	}