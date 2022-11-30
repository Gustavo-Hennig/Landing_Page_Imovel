<?php/*
    ini_set('smtp_port', 587);
    class Email{
          var $remetente_nome;
          var $remetente_email;
          var $responder_para;
          var $email_destinatario;
          var $assunto;
          var $mensagem_HTML;
          var $erro;
          public function enviar(){
                if(!isset($this->remetente_nome) || !isset($this->remetente_email) || !isset($this->email_destinatario) || !isset($this->assunto) || !isset($this->mensagem_HTML)){
                    $this->erro="<b>ERRO: </b> Você deixou de especificar algum atributo, lembre-se de que o único opcional é o email para resposta, que utiliza o email do remetente se deixado em branco.";
                }else{
                    if(!isset($this->responder_para)){
                        $this->responder_para=$this->remetente_email;
                    }
                if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n";
                else $quebra_linha = "\n";
                if(strstr($this->email_destinatario," ")){
                    $this->email_destinatario=str_replace(" ", "", $this->email_destinatario);
                }
                $headers = "MIME-Version: 1.1" .$quebra_linha;
                $headers .= "Content-type: text/html; charset=utf-8" .$quebra_linha;
                $headers .= "From: " . $this->responder_para.$quebra_linha;
                $headers .= "Reply-To: " . $this->remetente_email . $quebra_linha;
                if(!mail($this->email_destinatario, $this->assunto, $this->mensagem_HTML, $headers ,"-r".$this->responder_para)){
                        $headers .= "Return-Path: " . $this->responder_para . $quebra_linha;
                    mail($this->email_destinatario, $this->assunto, $this->mensagem_HTML, $headers);
                }
            }
          }   
    }
    /* USO 
    1- instancie a classe Email;
    $obj_email=new Email();

    2- Defina o valor dos atributos
    $obj_email->remetente_nome="";
    $obj_email->remetente_email="";
    $obj_email->responder_para=""; (opcional)
    $obj_email->email_destinatario="";
    $obj_email->assunto="";
    $obj_email->mensagem_HTML="";

    3- Envie o email
    $obj_email->enviar(); 

    $obj_email=new Email();
    $obj_email->remetente_nome="";
    $obj_email->remetente_email="";
    $obj_email->responder_para="";
    $obj_email->email_destinatario="";
    $obj_email->assunto="";
    $obj_email->mensagem_HTML="";
    $obj_email->enviar();
*/
?>