<template id="alert-template">
    <div class="alert {{ type }}">
        <span class="alert-closebtn">&times;</span>
        <slot name="alert-data"></slot>
    </div>
</template>