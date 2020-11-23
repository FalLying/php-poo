<?php


class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
    }

    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == "CC")
        {
            $this->setSaldo(50);
        } else if ($tipo == "CP")
        {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if ($this->getSaldo() != 0)
        {
            return 0;
        } else
        {
            $this->setStatus(false);
            return 1;
        }
    }
    public function depositar($valor)
    {
        if ($this->getStatus() == true)
        {
            $this->setSaldo($this->getSaldo()+$valor);
            return 1;
        } else
        {
            return 0;
        }
    }
    public function sacar($valor)
    {
        if (($this->status == true) && ($this->saldo >= $valor))
        {
            $this->setSaldo($this->getSaldo()-$valor);
            return 1;
        } else
        {
            return 0;
        }
    }
    public function pagarMensalidade()
    {
        $valor = 0;
        if ($this->getTipo() == "CC")
        {
            $valor = 12;
        } else if ($this->getTipo() == "CP")
        {
            $valor = 20;
        }
        return $this->sacar($valor);
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }
    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }
    public function getDono()
    {
        return $this->dono;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }

}
