<?php
    use NNV\RestCountries;

    class CountriesAPI 
    {
        private $countries;

        public function __construct()
        {
            $this->countries = new RestCountries;
        }

        public function GetCountriesByContinent($continent)
        {
            return $this->countries->byRegion($continent);
        }

        public function GetCountriesBySubRegion($region)
        {
            return $this->countries->byRegionalBloc($region);
        }
        
        public function GetCountriesByLanguage($Language)
        {
            return $this->countries->byLanguage($Language);
        }

        public function GetCountriesByCapitalCity($capital)
        {
            return $this->countries->byCapitalCity($capital);;
        }

        protected function GetContriesByName($name)
        {
            return $this->countries->byName($name);
        }

    }

?>