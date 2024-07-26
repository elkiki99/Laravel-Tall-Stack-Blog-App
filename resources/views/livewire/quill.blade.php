<div>
    <!-- CSS for Quill, Highlight.js, and KaTeX -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.css" />

    <!-- Toolbar container -->
    <div id="toolbar-container" wire:ignore>
        <!-- Various toolbar options as before -->
        <span class="ql-formats">
            <select class="ql-font"></select>
            <select class="ql-size"></select>
        </span>
        <span class="ql-formats">
            <button class="ql-bold"></button>
            <button class="ql-italic"></button>
            <button class="ql-underline"></button>
            <button class="ql-strike"></button>
        </span>
        <span class="ql-formats">
            <select class="ql-color"></select>
            <select class="ql-background"></select>
        </span>
        <span class="ql-formats">
            <button class="ql-script" value="sub"></button>
            <button class="ql-script" value="super"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-header" value="2"></button>
            <button class="ql-header" value="3"></button>
            <button class="ql-blockquote"></button>
            <button class="ql-code-block"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-list" value="ordered"></button>
            <button class="ql-list" value="bullet"></button>
            <button class="ql-indent" value="-1"></button>
            <button class="ql-indent" value="+1"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-direction" value="rtl"></button>
            <select class="ql-align"></select>
        </span>
        <span class="ql-formats">
            <button class="ql-link"></button>
            <button class="ql-image"></button>
            <button class="ql-video"></button>
            <button class="ql-formula"></button>
        </span>
        <span class="ql-formats">
            <button class="ql-clean"></button>
        </span>
    </div>

    <!-- Quill editor container -->
    <div id="{{ $quillId }}" wire:ignore style="min-height: 200px;">
    </div>

    <!-- JavaScript for Quill, Highlight.js, and KaTeX -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/katex@0.16.9/dist/katex.min.js" defer></script>

    <!-- Initialize Quill editor -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quill = new Quill('#{{ $quillId }}', {
                modules: {
                    syntax: true,
                    toolbar: '#toolbar-container',
                },
                theme: 'snow',
            });

            quill.on('text-change', function() {
                const value = document.querySelector('.ql-editor').innerHTML;
                @this.set('value', value);
            });
        });
    </script>
</div>