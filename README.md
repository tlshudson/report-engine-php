# 📊 Report Engine - Gerador de Relatórios em PDF com PHP + Oracle (OCI8)

Este projeto é uma API leve e modular para **geração de relatórios em PDF** utilizando:
- PHP com arquitetura **MVC**
- Conexão com banco de dados **Oracle** via extensão **OCI8**
- Biblioteca **FPDF** para renderização de PDFs
- Servidor **Apache** (ambiente LAMP)

---

## 🛠️ Tecnologias e Requisitos

Antes de rodar o projeto, é necessário ter o seguinte ambiente instalado:

### 🔧 Backend
- **PHP 8.4.10+**
- **Extensão OCI8** para PHP
- **Apache HTTP Server** (ou qualquer servidor web compatível)
- **Oracle Client instalado e configurado** (instant client + variables)
- **Biblioteca FPDF** (inclusa em `vendor/fpdf`)

### 📦 Bibliotecas Utilizadas
- [FPDF](http://www.fpdf.org/) - Geração de arquivos PDF em PHP puro

---

## 🧱 Estrutura de Diretórios

```bash
/report-engine
├── app/
│   ├── config/         # Configurações do banco Oracle
│   ├── controllers/    # Lógica dos relatórios
│   ├── models/         # Camada de acesso ao banco
│   ├── views/          # Templates que geram os PDFs
│   └── libraries/      # Wrappers, FPDF estendido etc.
├── public/             # Front controller (index.php)
├── system/             # Roteador simples
├── vendor/             # Biblioteca FPDF
├── .htaccess           # URLs amigáveis
└── README.md

