<?php

namespace Database\Seeders;

use App\Models\ProjectFeature;
use Illuminate\Database\Seeder;

class ProjectFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        $features = [
            ['title' => 'ESP32-S3', 'category' => 'Hardware', 'description' => 'Cada luva utiliza uma ESP32-S3 dedicada para ler os sensores e coordenar a comunicação com o aplicativo.', 'icon' => 'chip', 'sort_order' => 10],
            ['title' => 'Cinco Sensores Flex', 'category' => 'Hardware', 'description' => 'Um sensor flex por dedo registra a variação de flexão necessária para representar a configuração da mão.', 'icon' => 'hand', 'sort_order' => 20],
            ['title' => 'BNO055', 'category' => 'Hardware', 'description' => 'A unidade inercial BNO055 fornece dados de orientação e movimento da mão durante os gestos.', 'icon' => 'motion', 'sort_order' => 30],
            ['title' => 'Bluetooth Low Energy', 'category' => 'Conectividade', 'description' => 'O protocolo BLE entre cada luva e o aplicativo já foi projetado; a integração real está em desenvolvimento.', 'icon' => 'bluetooth', 'sort_order' => 40],
            ['title' => 'Aplicativo Mobile', 'category' => 'Aplicativo', 'description' => 'Aplicativo desenvolvido com React Native, Expo, TypeScript e Expo Router para reunir a experiência Luvia.', 'icon' => 'mobile', 'sort_order' => 50],
            ['title' => 'Home', 'category' => 'Aplicativo', 'description' => 'Ponto de entrada do aplicativo para acesso rápido aos principais módulos e informações do ecossistema.', 'icon' => 'home', 'sort_order' => 60],
            ['title' => 'Tradução', 'category' => 'Aplicativo', 'description' => 'Área dedicada ao fluxo de tradução em desenvolvimento, sem afirmar resultados ainda não validados.', 'icon' => 'translate', 'sort_order' => 70],
            ['title' => 'Luvas', 'category' => 'Aplicativo', 'description' => 'Módulo para acompanhar as luvas inteligentes e o estado da futura integração Bluetooth Low Energy.', 'icon' => 'glove', 'sort_order' => 80],
            ['title' => 'Calibração', 'category' => 'Aplicativo', 'description' => 'Fluxo destinado à calibração dos sensores flex e à preparação das luvas para cada utilização.', 'icon' => 'sliders', 'sort_order' => 90],
            ['title' => 'Dicionário', 'category' => 'Aplicativo', 'description' => 'Espaço de consulta para organizar e apresentar conteúdos relacionados aos sinais em Libras.', 'icon' => 'book', 'sort_order' => 100],
            ['title' => 'Favoritos', 'category' => 'Aplicativo', 'description' => 'Módulo para facilitar o acesso do usuário aos conteúdos que deseja consultar novamente.', 'icon' => 'heart', 'sort_order' => 110],
            ['title' => 'Perfil e Configurações', 'category' => 'Aplicativo', 'description' => 'Área do aplicativo para preferências, conta e ajustes da experiência do usuário.', 'icon' => 'user', 'sort_order' => 120],
            ['title' => 'Backend/API Node.js', 'category' => 'Backend', 'description' => 'API principal já desenvolvida em Node.js e Express e utilizada pelo aplicativo mobile da Luvia.', 'icon' => 'server', 'sort_order' => 130],
            ['title' => 'Prisma ORM', 'category' => 'Backend', 'description' => 'Camada de acesso a dados da API existente, responsável pela integração tipada com o banco principal.', 'icon' => 'database-link', 'sort_order' => 140],
            ['title' => 'PostgreSQL/Neon', 'category' => 'Backend', 'description' => 'Banco PostgreSQL hospedado na Neon utilizado pela API do ecossistema Luvia.', 'icon' => 'database', 'sort_order' => 150],
            ['title' => 'Autenticação JWT', 'category' => 'Backend', 'description' => 'A API utiliza autenticação com access token JWT e refresh token no fluxo do aplicativo.', 'icon' => 'shield', 'sort_order' => 160],
        ];

        $features = array_map(
            fn (array $feature): array => [...$feature, 'created_at' => $now, 'updated_at' => $now],
            $features,
        );

        ProjectFeature::query()->upsert(
            $features,
            ['title'],
            ['category', 'description', 'icon', 'sort_order', 'updated_at'],
        );
    }
}
