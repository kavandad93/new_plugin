document.addEventListener('DOMContentLoaded',()=>{
 const form=document.querySelector('#wnat-ticket');
 if(form){
  form.addEventListener('submit',e=>{
   e.preventDefault();
   const data=new FormData(form);
   data.append('action','wnat_create_ticket');
   data.append('nonce',window.wnat_nonce||'');
   fetch(window.ajaxurl||'/wp-admin/admin-ajax.php',{method:'POST',body:data})
   .then(r=>r.json())
   .then(()=>alert('تیکت ارسال شد'));
  });
 }
});
