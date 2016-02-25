
{!! HTML::script('assets/frontend/js/jquery-2.1.4.min.js') !!}
{!! HTML::script('assets/frontend/js/bootstrap/carousel.js') !!}
{!! HTML::script('assets/frontend/js/bootstrap/transition.js') !!}
{!! HTML::script('assets/frontend/js/bootstrap/button.js') !!}
{!! HTML::script('assets/frontend/js/bootstrap/collapse.js') !!}
{!! HTML::script('assets/frontend/js/bootstrap/validator.js') !!}
{!! HTML::script('assets/frontend/js/underscore.js') !!}
{!! HTML::script('assets/frontend/js/NumberCounter.js') !!}
{!! HTML::script('assets/frontend/js/jquery.magnific-popup.min.js') !!}
{!! HTML::script('assets/frontend/js/custom.js') !!}

<script type="text/javascript">
function localeString(x, sep, grp) {
    var sx = (''+x).split('.'), s = '', i, j;
    sep || (sep = ','); // default seperator
    grp || grp === 0 || (grp = 3); // default grouping
    i = sx[0].length;
    while (i > grp) {
        j = i - grp;
        s = sep + sx[0].slice(j, i) + s;
        i = j;
    }
    s = sx[0].slice(0, i) + s;
    sx[0] = s;
    return sx.join('.')
}
function parseCurrency(s) {
    var i = parseInt(s.toString().replace(/,/g, ""), 10);
    return isNaN(i) ? 0 : i;
}
 $(function () {
 	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 })
</script>

