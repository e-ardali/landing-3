<script>
export default {
    props: ['name', 'size', 'strokeWidth', 'strokeColor', 'fillColor', 'rotate'],
    data() {
        return {
            style: {
                transform: this.rotate ? 'rotate(' + this.rotate + 'deg)' : '',
            },
            pageDir: document.dir

        }
    },
}
</script>

<template>
    <svg xmlns="http://www.w3.org/2000/svg"
         class="icon icon-tabler"
         :style="style"
         :width="size ? size : 24"
         :height="size ? size : 24"
         viewBox="0 0 24 24"
         :stroke-width="strokeWidth ? strokeWidth : 1.75"
         :stroke="strokeColor ? strokeColor : 'currentColor'"
         :fill="fillColor ? fillColor : 'none'"
         stroke-linecap="round"
         stroke-linejoin="round">

        <template v-if="name.trim() === 'settings'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path
                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
            <circle cx="12" cy="12" r="3"></circle>
        </template>

        <template v-if="name.trim() === 'dots-vertical'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="12" cy="12" r="1"></circle>
            <circle cx="12" cy="19" r="1"></circle>
            <circle cx="12" cy="5" r="1"></circle>
        </template>

        <template v-else-if="name.trim() === 'logout'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
            <path d="M7 12h14l-3 -3m0 6l3 -3"></path>
        </template>

        <template v-else-if="name.trim() === 'menu'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="4" y1="6" x2="20" y2="6"></line>
            <line x1="4" y1="12" x2="20" y2="12"></line>
            <line x1="4" y1="18" x2="20" y2="18"></line>
        </template>

        <template v-else-if="name.trim() === 'plus'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="5" y1="12" x2="19" y2="12"></line>
        </template>

        <template v-else-if="name.trim() === 'circle-plus'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="12" cy="12" r="9"></circle>
            <line x1="9" y1="12" x2="15" y2="12"></line>
            <line x1="12" y1="9" x2="12" y2="15"></line>
        </template>

        <template v-else-if="name.trim() === 'minus'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="5" y1="12" x2="19" y2="12"></line>
        </template>

        <template v-else-if="name.trim() === 'arrow-narrow-start'">
            <template v-if="pageDir == 'rtl'">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <line x1="15" y1="16" x2="19" y2="12"></line>
                <line x1="15" y1="8" x2="19" y2="12"></line>
            </template>
            <template v-else>
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <line x1="5" y1="12" x2="9" y2="16"></line>
                <line x1="5" y1="12" x2="9" y2="8"></line>
            </template>
        </template>

        <template v-else-if="name.trim() === 'arrow-narrow-end'">
            <template v-if="pageDir == 'rtl'">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <line x1="5" y1="12" x2="9" y2="16"></line>
                <line x1="5" y1="12" x2="9" y2="8"></line>
            </template>
            <template v-else>
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <line x1="15" y1="16" x2="19" y2="12"></line>
                <line x1="15" y1="8" x2="19" y2="12"></line>
            </template>
        </template>

        <template v-else-if="name.trim() === 'arrow-narrow-up'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="16" y1="9" x2="12" y2="5"></line>
            <line x1="8" y1="9" x2="12" y2="5"></line>
        </template>

        <template v-else-if="name.trim() === 'arrow-narrow-down'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <line x1="16" y1="15" x2="12" y2="19"></line>
            <line x1="8" y1="15" x2="12" y2="19"></line>
        </template>

        <template v-else-if="name.trim() === 'search'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="10" cy="10" r="7"></circle>
            <line x1="21" y1="21" x2="15" y2="15"></line>
        </template>

        <template v-else-if="name.trim() === 'chevron-left'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="15 6 9 12 15 18"></polyline>
        </template>

        <template v-else-if="name.trim() === 'chevron-right'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="9 6 15 12 9 18"></polyline>
        </template>

        <template v-else-if="name.trim() === 'dots-vertical'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="12" cy="12" r="1"></circle>
            <circle cx="12" cy="19" r="1"></circle>
            <circle cx="12" cy="5" r="1"></circle>
        </template>

        <template v-else-if="name.trim() === 'edit'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3"></path>
            <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"></path>
            <line x1="16" y1="5" x2="19" y2="8"></line>
        </template>

        <template v-else-if="name.trim() === 'calendar-stats'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4"></path>
            <path d="M18 14v4h4"></path>
            <circle cx="18" cy="18" r="4"></circle>
            <path d="M15 3v4"></path>
            <path d="M7 3v4"></path>
            <path d="M3 11h16"></path>
        </template>

        <template v-else-if="name.trim() === 'link'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5"></path>
            <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5"></path>
        </template>

        <template v-else-if="name.trim() === 'user-check'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
            <path d="M16 11l2 2l4 -4"></path>
        </template>

        <template v-else-if="name.trim() === 'checkbox'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="9 11 12 14 20 6"></polyline>
            <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"></path>
        </template>

        <template v-else-if="name.trim() === 'check'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M5 12l5 5l10 -10"></path>
        </template>

        <template v-else-if="name.trim() === 'package'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline>
            <line x1="12" y1="12" x2="20" y2="7.5"></line>
            <line x1="12" y1="12" x2="12" y2="21"></line>
            <line x1="12" y1="12" x2="4" y2="7.5"></line>
            <line x1="16" y1="5.25" x2="8" y2="9.75"></line>
        </template>

        <template v-else-if="name.trim() === 'home'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="5 12 3 12 12 3 21 12 19 12"></polyline>
            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
        </template>

        <template v-else-if="name.trim() === 'square-x'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <rect x="4" y="4" width="16" height="16" rx="2"></rect>
            <path d="M10 10l4 4m0 -4l-4 4"></path>
        </template>

        <template v-else-if="name.trim() === 'x'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </template>

        <template v-else-if="name.trim() === 'photo'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="15" y1="8" x2="15.01" y2="8"></line>
            <rect x="4" y="4" width="16" height="16" rx="3"></rect>
            <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5"></path>
            <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2"></path>
        </template>

        <template v-else-if="name.trim() === 'arrows-sort'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M3 9l4 -4l4 4m-4 -4v14"></path>
            <path d="M21 15l-4 4l-4 -4m4 4v-14"></path>
        </template>

        <template v-else-if="name.trim() === 'trash'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="4" y1="7" x2="20" y2="7"></line>
            <line x1="10" y1="11" x2="10" y2="17"></line>
            <line x1="14" y1="11" x2="14" y2="17"></line>
            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
        </template>

        <template v-else-if="name.trim() === 'users'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
        </template>

        <template v-else-if="name.trim() === 'layout-dashboard'">
            <desc>Download more icon variants from https://tabler-icons.io/i/layout-dashboard</desc>
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M4 4h6v8h-6z"></path>
            <path d="M4 16h6v4h-6z"></path>
            <path d="M14 12h6v8h-6z"></path>
            <path d="M14 4h6v4h-6z"></path>
        </template>

        <template v-else-if="name.trim() === 'ad'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
            <path d="M7 15v-4a2 2 0 0 1 4 0v4"></path>
            <line x1="7" y1="13" x2="11" y2="13"></line>
            <path d="M17 9v6h-1.5a1.5 1.5 0 1 1 1.5 -1.5"></path>
        </template>

        <template v-else-if="name.trim() === 'adjustments'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="6" cy="10" r="2"></circle>
            <line x1="6" y1="4" x2="6" y2="8"></line>
            <line x1="6" y1="12" x2="6" y2="20"></line>
            <circle cx="12" cy="16" r="2"></circle>
            <line x1="12" y1="4" x2="12" y2="14"></line>
            <line x1="12" y1="18" x2="12" y2="20"></line>
            <circle cx="18" cy="7" r="2"></circle>
            <line x1="18" y1="4" x2="18" y2="5"></line>
            <line x1="18" y1="9" x2="18" y2="20"></line>
        </template>

        <template v-else-if="name.trim() === 'user-circle'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="12" cy="12" r="9"></circle>
            <circle cx="12" cy="10" r="3"></circle>
            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
        </template>

        <template v-else-if="name.trim() === 'user-check'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
            <path d="M16 11l2 2l4 -4"></path>
        </template>

        <template v-else-if="name.trim() === 'shield-lock'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path>
            <circle cx="12" cy="11" r="1"></circle>
            <line x1="12" y1="12" x2="12" y2="14.5"></line>
        </template>

        <template v-else-if="name.trim() === 'user-check'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
            <path d="M16 11l2 2l4 -4"></path>
        </template>

        <template v-else-if="name.trim() === 'user-x'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
            <path d="M17 9l4 4m0 -4l-4 4"></path>
        </template>

        <template v-else-if="name.trim() === 'map-pin'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="12" cy="11" r="3"></circle>
            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
        </template>

        <template v-else-if="name.trim() === 'file-invoice'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
            <line x1="9" y1="7" x2="10" y2="7"></line>
            <line x1="9" y1="13" x2="15" y2="13"></line>
            <line x1="13" y1="17" x2="15" y2="17"></line>
        </template>

        <template v-else-if="name.trim() === 'file-description'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
            <path d="M9 17h6"></path>
            <path d="M9 13h6"></path>
        </template>

        <template v-else-if="name.trim() === 'brand-youtube'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <rect x="3" y="5" width="18" height="14" rx="4"></rect>
            <path d="M10 9l5 3l-5 3z"></path>
        </template>

        <template v-else-if="name.trim() === 'apps'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
            <line x1="14" y1="7" x2="20" y2="7"></line>
            <line x1="17" y1="4" x2="17" y2="10"></line>
        </template>

        <template v-else-if="name.trim() === 'category'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M14 4h6v6h-6z"></path>
            <path d="M4 14h6v6h-6z"></path>
            <circle cx="17" cy="17" r="3"></circle>
            <circle cx="7" cy="7" r="3"></circle>
        </template>

        <template v-else-if="name.trim() === 'address-book'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z"></path>
            <path d="M10 16h6"></path>
            <circle cx="13" cy="11" r="2"></circle>
            <path d="M4 8h3"></path>
            <path d="M4 12h3"></path>
            <path d="M4 16h3"></path>
        </template>

        <template v-else-if="name.trim() === 'cloud-lock'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path
                d="M19 18a3.5 3.5 0 0 0 0 -7h-1c.397 -1.768 -.285 -3.593 -1.788 -4.787c-1.503 -1.193 -3.6 -1.575 -5.5 -1s-3.315 2.019 -3.712 3.787c-2.199 -.088 -4.155 1.326 -4.666 3.373c-.512 2.047 .564 4.154 2.566 5.027"></path>
            <rect x="8" y="15" width="8" height="5" rx="1"></rect>
            <path d="M10 15v-2a2 2 0 1 1 4 0v2"></path>
        </template>

        <template v-else-if="name.trim() === 'speakerphone'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M18 8a3 3 0 0 1 0 6"></path>
            <path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5"></path>
            <path
                d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8"></path>
        </template>

        <template v-else-if="name.trim() === 'phone-call'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path
                d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
            <path d="M15 7a2 2 0 0 1 2 2"></path>
            <path d="M15 3a6 6 0 0 1 6 6"></path>
        </template>

        <template v-else-if="name.trim() === 'loader-2'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M12 3a9 9 0 1 0 9 9"></path>
        </template>

        <template v-else-if="name.trim() === 'layout-grid'">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <rect x="4" y="4" width="6" height="6" rx="1"></rect>
            <rect x="14" y="4" width="6" height="6" rx="1"></rect>
            <rect x="4" y="14" width="6" height="6" rx="1"></rect>
            <rect x="14" y="14" width="6" height="6" rx="1"></rect>
        </template>

    </svg>
</template>
