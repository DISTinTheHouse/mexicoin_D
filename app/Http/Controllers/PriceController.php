<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class PriceController extends Controller
{
    public function index()
    {
        return view('price.form');
    }

    public function get(Request $request)
    {
        $asset = $request->input('asset');
        $url = 'https://bbv.infosel.com/bancomerindicators/indexV9.aspx';
        $client = new Client();

        try {
            $response = $client->request('GET', $url);
            $html = $response->getBody()->getContents();

            $crawler = new Crawler($html);
            $assetLower = strtolower($asset);
            $assetLink = match ($assetLower) {
                'oro' => 'OroLibertadClosesCV.html',
                'plata' => 'PlataLibertadClosesCV.html',
                default => null
            };

            if (!$assetLink) {
                return back()->with('error', 'Asset no soportado.');
            }

            $linkNode = $crawler->filter("a[href*='$assetLink']");

            if ($linkNode->count() === 0) {
                return back()->with('error', "No se encontró el asset.");
            }

            $ancestor = $linkNode->ancestors()->filter('div.col-sm-4');
            $compra = $ancestor->filter('div.d-flex > div.border-right .precio-c')->text(null);
            $venta = $ancestor->filter('div.d-flex > div:not(.border-right) .precio-c')->text(null);

            return view('price.result', [
                'asset' => ucfirst($asset),
                'compra' => $compra,
                'venta' => $venta,
                'fecha' => now()->format('Y-m-d H:i:s')
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Ocurrió un error al obtener los precios: ' . $e->getMessage());
        }
    }

    public function coins()
    {
        $precios = [];

        $assets = [
            'Oro' => 'CentenarioClosesCV.html',
            'Plata' => 'PlataLibertadClosesCV.html',
        ];

        $client = new Client();
        $response = $client->get('https://bbv.infosel.com/bancomerindicators/indexV9.aspx');
        $html = $response->getBody()->getContents();
        $crawler = new Crawler($html);

        foreach ($assets as $nombre => $link) {
            $nodo = $crawler->filter("a[href*='$link']");
            if ($nodo->count() === 0) continue;

            $contenedor = $nodo->ancestors()->filter('div.col-sm-4');
            $compra = $contenedor->filter('div.d-flex > div.border-right .precio-c')->text(null);
            $venta = $contenedor->filter('div.d-flex > div:not(.border-right) .precio-c')->text(null);

            $precios[] = [
                'nombre' => $nombre,
                'compra' => $compra,
                'venta' => $venta,
            ];
        }

        return view('home', [
            'precios' => $precios,
            'fecha' => now()->format('d/m/Y H:i'),
        ]);
    }

    public function coinsData()
    {
        $precios = [];

        $assets = [
            'Oro' => 'CentenarioClosesCV.html',
            'Plata' => 'PlataLibertadClosesCV.html',
        ];

        $client = new Client();
        $response = $client->get('https://bbv.infosel.com/bancomerindicators/indexV9.aspx');
        $html = $response->getBody()->getContents();
        $crawler = new Crawler($html);

        foreach ($assets as $nombre => $link) {
            $nodo = $crawler->filter("a[href*='$link']");
            if ($nodo->count() === 0) continue;

            $contenedor = $nodo->ancestors()->filter('div.col-sm-4');
            $compra = $contenedor->filter('div.d-flex > div.border-right .precio-c')->text(null);
            $venta = $contenedor->filter('div.d-flex > div:not(.border-right) .precio-c')->text(null);

            $precios[] = [
                'nombre' => $nombre,
                'compra' => $compra,
                'venta' => $venta,
            ];
        }

        return $precios;
    }
}

