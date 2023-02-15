import toastr from 'toastr'
import 'toastr/build/toastr.min.css'

export function  useToastr()
{
    toastr.options.positionClass ='toast-bottom-right';
    toastr.options.closeButton = true;
    toastr.options.progressbar = true;
    return toastr;
}
