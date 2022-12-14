<h2 style="text-align:center">MQTT Client Comparison</h2>

<div class="panel panel-default">
  <div class="panel-body">
      <table class="table table-hover table-bordered table-condensed">
           <thead>
                <tr>
                     <th>Client</th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="MQTT version 3.1 specification.">MQTT 3.1</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="MQTT version 3.1.1 specification.">MQTT 3.1.1</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="MQTT version 5.0 specification.">MQTT 5.0</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="Last Will and Testament messages.">LWT</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="Transport Layer Security or SSL.">SSL / TLS</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="Can automatically reconnect to the server if the connection is lost.">Automatic Reconnect</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="Will buffer messages whilst offline to send when the connection is re-established.">Offline Buffering</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="Supports persisting messages incase of an application crash.">Message Persistence</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="Can communicate to MQTT servers that support WebSockets.">WebSocket Support</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="Can communicate to MQTT servers with support TCP.">Standard MQTT Support</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="Supports Asynchronous APIs.">Blocking API</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="Supports a blocking or 'single threaded' API.">Non-Blocking API</a></th>
                     <th><a href="#" data-toggle="tooltip" data-placement="right" title="If the client cannot connect to a server, fails over to an alternative(s).">High Availability</a></th>

                 </tr>
             </thead>
             <tbody>
                 <tr>
                    <th scope="row"><a href="index.php?page=clients/java/index.php">Java</a></th>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                    <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                </tr>
                <tr>
                   <th scope="row"><a href="index.php?page=clients/python/index.php">Python</a></th>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                   <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
               </tr>
               <tr>
                  <th scope="row"><a href="index.php?page=clients/js/index.php">JavaScript</a></th>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                  <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                  <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
                  <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                  <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              </tr>
              <tr>
                 <th scope="row"><a href="index.php?page=clients/golang/index.php">GoLang</a></th>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                 <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
             </tr>
             <tr>
                <th scope="row"><a href="index.php?page=clients/c/index.php">C</a></th>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
                <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
            </tr>
            <tr>
               <th scope="row"><a href="index.php?page=clients/cpp/index.php">C++</a></th>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
           </tr>
            <tr>
               <th scope="row"><a href="index.php?page=clients/rust/index.php">Rust</a></th>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
           </tr>
            <tr>
               <th scope="row"><a href="index.php?page=clients/dotnet/index.php">.Net (C#)</a></th>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
               <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
               <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
               <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
               <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
               <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
           </tr>
           <tr>
              <th scope="row"><a href="index.php?page=clients/android/index.php">Android Service</a></th>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
              <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
          </tr>
          <tr>
             <th scope="row"><a href="index.php?page=clients/c/embedded/index.php">Embedded C/C++</a></th>
             <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
             <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
             <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
             <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
             <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
             <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
             <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
             <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
             <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
             <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
             <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
             <td class="text-center success"><i class="fa fa-check" aria-hidden="true"></i></td>
             <td class="text-center warning"><i class="fa fa-times" aria-hidden="true"></i></td>
         </tr>

             </tbody>
         </table>
         <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>

         <script type="text/javascript">
             $(function () {
               $('[data-toggle="tooltip"]').tooltip()
             })
         </script>

  </div>
</div>
