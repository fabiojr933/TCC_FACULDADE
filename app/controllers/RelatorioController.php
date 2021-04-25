<?php

namespace app\controllers;

use app\core\Controller;
use app\models\service\ItemService;
use app\models\service\OrdemServicoService;
use app\models\service\Service;
use app\util\UtilService;


class RelatorioController extends Controller
{

    public function __construct()
    {
        $this->usuario = UtilService::getUsuario();
        if (!$this->usuario) {
            $this->redirect(URL_BASE . "login");
            exit;
        }
    }

    public function index()
    {       
        $dados["Rel_cliente"] = OrdemServicoService::todoClientes(); 
        $dados["view"] = "Relatorio/index";
        $this->load("template", $dados);
    }
    public function gerarRelatorio(){
        $pdf = new \FPDF();
        $pdf->AddPage();
        $pdf->SetFont("arial", "B", 16);
        $pdf->Cell(190, 10, "Relatorios de Pedidos" ,0, 0, "C");
        $pdf->Ln(15);

        $pdf->SetFont("arial", "", 10);
        $pdf->Cell(15, 7, "Id", 1, 0, "C");
        $pdf->Cell(60, 7, "Cliente", 1, 0, "C");
        $pdf->Cell(60, 7, "Endereco", 1, 0, "C");
        $pdf->Cell(20, 7, "Data", 1, 0, "C");
        $pdf->Cell(20, 7, "Total", 1, 0, "C");

        $pdf->Ln();

        $pdf->SetFillColor(200,200,200);
        $pdf->SetTextColor(0);
        $pdf->SetFont("arial", "", 8);
        $pintar = false;

        $pedido = new \stdClass();
        $pedido->data1 = $_POST["data1"];
        $pedido->data2 = $_POST["data1"];
       
       
        $prisma =  new OrdemServicoService(); 
        $pedidos = $prisma->getPedidoPrisma();  
       
        foreach($pedidos as $ped){
            $pdf->Cell(15, 7, $ped->id_pedido, 1, 0, "C", $pintar);
            $pdf->Cell(60, 7, $ped->nome_cliente, 1, 0, "C", $pintar);
            $pdf->Cell(60, 7, $ped->endereco, 1, 0, "C", $pintar);
            $pdf->Cell(20, 7, $ped->data_pedido, 1, 0, "C", $pintar);
            $pdf->Cell(20, 7, $ped->total_pedido, 1, 0, "C", $pintar);
            $pdf->Ln();
            $pintar = !$pintar;
        }
        
        $pdf->Output();
    }
}
