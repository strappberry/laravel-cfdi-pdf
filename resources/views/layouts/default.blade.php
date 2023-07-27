<style>
    /* General styles */
    table,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td {
        margin: 0;
        padding: 0;
        border: 0;
        border-spacing: 0;
        font: inherit;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
    }

    .bg-primary {
        background-color: {{ config('cfdi-pdf.colors.primary') }}
    }

    .bg-secondary {
        background-color: {{ config('cfdi-pdf.colors.secondary') }}
    }

    .bg-tertiary {
        background-color: {{ config('cfdi-pdf.colors.tertiary') }}
    }

    .border {
        border: 1px solid;
    }

    .border-b {
        border-bottom: 1px solid;
    }

    .border-l {
        border-left: 1px solid;
    }

    .border-r {
        border-right: 1px solid;
    }

    .border-primary {
        border-color: {{ config('cfdi-pdf.colors.primary') }}
    }

    .border-secondary {
        border-color: {{ config('cfdi-pdf.colors.secondary') }}
    }

    .font-bold {
        font-weight: bold;
    }

    .mb {
        margin-bottom: 8px;
    }

    .rounded {
        border-radius: 6px;
    }

    .rounded-b-l {
        border-bottom-left-radius: 6px;
    }

    .rounded-b-r {
        border-bottom-right-radius: 6px;
    }

    .rounded-t-l {
        border-top-left-radius: 6px;
    }

    .rounded-t-r {
        border-top-right-radius: 6px;
    }

    .text-left {
        text-align: left;
    }
    .text-center {
        text-align: center;
    }
    .text-right {
        text-align: right;
    }

    .text-primary {
        color: {{ config('cfdi-pdf.colors.primary') }}
    }

    .text-primary-contrast {
        color: {{ config('cfdi-pdf.colors.primary-contrast') }}
    }

    .text-secondary {
        color: {{ config('cfdi-pdf.colors.secondary') }}
    }

    /* Header styles */
    .header-invoice-info-border {
        border: 1px solid {{ config('cfdi-pdf.colors.primary') }};
        border-top-left-radius: 0;
        border-top-right-radius: 6px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 6px;
    }
</style>

<page backtop="43mm" backbottom="20mm">
    @include('laravel-cfdi-pdf::default-components.header')
    @include('laravel-cfdi-pdf::default-components.footer')

    @include('laravel-cfdi-pdf::default-components.products', [
        'products' => [[], []],
    ])
</page>
