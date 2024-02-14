<?php

class Registrar extends Model
{

    public function validade($DATA)
    {
        $model = new Model;
        $this->error = array();

        if (empty($DATA['unidades'])) {
            $this->error[] = "Campo Posto é obrigatório.";
        }

        // Validar campo Data da Visita
        if (empty($DATA['dataVisita'])) {
            $this->error[] = "Campo Data da Visita é obrigatório.";
        }

        // Validar campo Horário Chegada
        if (empty($DATA['hrChegada'])) {
            $this->error[] = "Campo Horário Chegada é obrigatório.";
        }

        // Validar campos Prontuário (exemplo, repita para outros prontuários)
        if (empty($DATA['firstPront'])) {
            $this->error[] = "Ao menos um prontuário é obrigatório";
        }

        // Validar outros campo Dinheiro 
        if (empty ($DATA['din_prata_apurado[]'])){
            $this->error[]= "Campo obrigatório";
        }

         // Validar outros campo Dinheiro  Estudante
        if (empty ($DATA['din_estudante_apurado[]'])){
            $this->error[]= "Campo obrigatório";
        }

         // Validar outros campo Dinheiro  Estudante
        if (empty ($DATA['din_prata_personalizado[]'])){
            $this->error[]= "Campo obrigatório";
        }
        
        // Validar Estudante personalizado 
        if (empty ($DATA['din_estudante_personalizado[]'])){
            $this->error[] = "Campo obrigatório";
        }

        // Validar outros campo Dinheiro Comum 
        if (empty ($DATA['din_comum[]'])){
            $this->error[] = "Campo obrigatório";
        }

        // Validar outros campo Dinheiro  Estudante
        if (empty ($DATA['din_escolar[]'])){
            $this->error[] = "Campo obrigatório";
        }

        // Validar outros campo Dinheiro  Estudante
        if (empty ($DATA[''])){
            $this->error[] = "Campo obrigtório";
        }


        // Validar campo Descrição Fiscal (caso esteja vazio e checkbox de impacto marcado)
        if (!empty($DATA['impacto']) && empty($DATA['text-satisfy'])) {
            $this->error[] = "Campo Descrição Fiscal é obrigatório quando há impacto na operação.";
        }

        
        if(count($this->error) == 0){
            return true;
        } 
        return false;

        
    }
    
}
