<html lang="en">
<?php include '../template/header.php'?>
<body>
<?php include '../template/navbar.php'?>
  
<div class="container-fluid text-center">    
  <div class="row content" style="height: 0px;">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center"> 
      <h1>Jargon</h1>
      <h3><a href="https://bitcoin.org/en/glossary/consensus" target="blank">Consensus</a></h3>
      <p>Consensus refers to how the nodes on the network for the Cryptocurrency you're using reach agreement of transactions, and validate blocks</p>
      <h3><a href="https://bitcoin.org/en/glossary/block" target="blank">Block</a></h3>
      <p>A block is a grouping of transactions. These transactions are validated by Miners, over an agreed upon Consensus algorithm. Several blocks linked together
        is what forms a Blockchain
      </p>
      <h3><a href="https://bitcoin.org/en/glossary/mining" target="blank">Mining</a></h3>
      <p>Mining is the process of adding transaction records to Bitcoin’s public ledger of past transactions or blockchain.</p>
      <hr>

    </div>

  </div>
  <div class="col-sm-2 sidenav"></div>
  <?php include '../template/table.php'?>
</div>


</body>
</html>
