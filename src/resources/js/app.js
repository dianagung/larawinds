import './bootstrap';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse'
import Datepicker from 'vanillajs-datepicker/Datepicker';
import 'vanillajs-datepicker/css/datepicker.css';
import Swal from 'sweetalert2';
 
window.Alpine = Alpine
// Alpine.plugin(collapse)
Alpine.start()

/*
*********************************
**  Code for formating Bytes
*********************************
*/
function formatBytes(bytes, decimals = 1) {
    if (!+bytes) return '0 Bytes'
    const k = 1000
    const dm = decimals < 0 ? 0 : decimals
    const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB']
    const i = Math.floor(Math.log(bytes) / Math.log(k))
    return `${parseFloat((bytes / Math.pow(k, i)).toFixed(dm))} ${sizes[i]}`
}

/*
*********************************
**  Code for formating number
*********************************
*/
function formatNumber(n) {
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}

/*
*********************************
**  Code for formating currency
*********************************
*/
function formatNumberToCommas(input, blur) {
    // get input value
    var input_val = input.value;
    // don't validate empty input
    if (input_val === "") { return; }
    // check for decimal
    if (input_val.indexOf(".") >= 0) {
      // get position of first decimal
      // this prevents multiple decimals from
      // being entered
      var decimal_pos = input_val.indexOf(".");
      // split number by decimal point
      var left_side = input_val.substring(0, decimal_pos);
      var right_side = input_val.substring(decimal_pos);
      // add commas to left side of number
      left_side = formatNumber(left_side);
      // validate right side
      right_side = formatNumber(right_side);
      // On blur make sure 2 numbers after decimal
      if (blur === "blur") {
        right_side += "00";
      }
      // Limit decimal to only 2 digits
      right_side = right_side.substring(0, 2);
      // join number by .
      input_val = left_side + "." + right_side;
  
    } else {
      // no decimal entered
      // add commas to number
      // remove all non-digits
      input_val = formatNumber(input_val);
      // final formatting
      if (blur === "blur") {
        input_val += ".00";
      }
    }
    // send updated string to input
    input.value = input_val;
}

/*
*********************************
**  Code for uploading file
*********************************
*/
const formUploads = document.querySelectorAll('input[type=file]');
formUploads.forEach(form => {
    let formId = form.id;
    let formValue = form.value;
    form.addEventListener("change", function(event) {
        let fileSize   = form.files[0].size;
        let fileType   = form.files[0].type;
        let fileName   = form.files[0].name;
        let fileLength = event.target.files.length;
        let fileTarget = event.target.files[0];
        if(fileLength > 0) {
            let url                 = URL.createObjectURL(fileTarget);
            let image               = document.getElementById(`preview__${formId}`);
                image.src           = url;
                image.style.display = "block";
            // HIDE THE ACTION UPLOAD LINK
            let action               = document.getElementById(`action__${formId}`);
                action.style.display = "none";
            // SHOW THE FILEINFO SECTION
            let fileInfo               = document.getElementById(`fileinfo__${formId}`);
                fileInfo.style.display = "flex";
            let fileInfoText           = fileInfo.querySelector("span");
                fileInfoText.innerHTML = `${fileName} (${formatBytes(fileSize)})`;
            // SHOW REMOVE LINK
            let remove               = document.getElementById(`remove__${formId}`);
                remove.style.display = "block";
            // CLICK EVENT FOR REMOVE LINK
            remove.addEventListener("click", function(e) {
                image.src              = "";
                action.style.display   = "flex";
                remove.style.display   = "none";
                fileInfo.style.display = "none";
                // SET EMPTY TO THE FORM INPUT'S VALUE
                form.value             = null;
            });
        }
    });
})

/*
*********************************
**  Code for Input Datepicker
*********************************
*/
const inputDatepicker = document.querySelectorAll('input[data-type="datepicker"]');
inputDatepicker.forEach(input => {
    const datepicker = new Datepicker(input, {
        autohide: true
    });
});

/*
*********************************
**  Code for Input Number
*********************************
*/
const inputNumber = document.querySelectorAll('input[data-type="number"]');
inputNumber.forEach(input => {
    let prevSibling = input.previousElementSibling;
    formatNumberToCommas(input);
    prevSibling.value = input.value.replace(/\,/g,'');
    input.addEventListener("keyup", function(e) {
        let val = e.target.value;
        formatNumberToCommas(input);
        prevSibling.value = val.replace(/\,/g,'');
    });
});

/*
*********************************
**  Code for Button Delete
*********************************
*/
const formDelete = document.querySelectorAll('form[data-type="delete"]');
formDelete.forEach(form => {
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        let confirmTitle = form.dataset.confirmTitle;
        let confirmText = form.dataset.confirmText;
        let confirmYes = form.dataset.confirmYes;
        let confirmNo = form.dataset.confirmNo;
        Swal.fire({
            title: confirmTitle,
            text: confirmText,
            // icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1e293b",
            cancelButtonColor: "#d33",
            cancelButtonText: confirmNo,
            confirmButtonText: confirmYes
          }).then((result) => {
            if (result.isConfirmed) {
              form.submit();
            }
          });
    });
});

/*
*********************************
**  Code for Button Update
*********************************
*/
const formUpdate = document.querySelectorAll('form[data-type="update"]');
formUpdate.forEach(form => {
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        let confirmTitle = form.dataset.confirmTitle;
        let confirmText = form.dataset.confirmText;
        let confirmYes = form.dataset.confirmYes;
        let confirmNo = form.dataset.confirmNo;
        Swal.fire({
            title: confirmTitle,
            text: confirmText,
            // icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1e293b",
            cancelButtonColor: "#d33",
            cancelButtonText: confirmNo,
            confirmButtonText: confirmYes
          }).then((result) => {
            if (result.isConfirmed) {
              form.submit();
            }
          });
    });
});