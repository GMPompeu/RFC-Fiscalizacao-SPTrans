<?php

 class Auditoria extends Controller{

        public function index(){

            $this->view('auditoria');
        }

        public function pagantes(){


            $this->view('pagantes');
        }
 }