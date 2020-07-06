<?php

/**
 * See LICENSE file for license details.
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author        D3 Data Development - Max Buhe <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */

namespace D3\PdfDocumentsCompat\Modules\Application\Model;

use D3\PdfDocuments\Application\Model\AbstractClasses\pdfdocumentsGeneric;
use D3\PdfDocuments\Application\Model\Documents\deliverynotePdf;
use D3\PdfDocuments\Application\Model\Documents\deliverynotewithoutlogoPdf;
use D3\PdfDocuments\Application\Model\Documents\invoicePdf;
use D3\PdfDocuments\Application\Model\Documents\invoicewithoutlogoPdf;
use OxidEsales\Eshop\Core\Registry;

class d3_Order_PDFDocsCompat extends d3_Order_PDFDocsCompat_parent
{
    public function setSelectedLang($iLang)
    {
        return null;
    }

    public function pdfFooter($oPdf)
    {
        return null;
    }

    public function pdfHeaderPlus($oPdf)
    {
        return null;
    }

    public function pdfHeader($oPdf)
    {
        return null;
    }

    public function genPdf($sFilename, $iSelLang = 0, $target = pdfdocumentsGeneric::PDF_DESTINATION_STDOUT)
    {
        switch (Registry::getRequest()->getRequestEscapedParameter('pdftype')) {
            case ('dnote'):
                $document = oxNew(deliverynotePdf::class);
                break;
            case ('dnote_without_logo'):
                $document = oxNew(deliverynotewithoutlogoPdf::class);
                break;
            case ('standart'):
                $document = oxNew(invoicePdf::class);
                break;
            default:
                $document = oxNew(invoicewithoutlogoPdf::class);
        }

        return $document->genPdf($sFilename, $iSelLang, $target);
    }

    public function exportStandart($oPdf)
    {
        return null;
    }

    public function exportDeliveryNote($oPdf)
    {
        return null;
    }
}