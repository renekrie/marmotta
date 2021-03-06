<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements. See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership. The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
/**
 * Created by IntelliJ IDEA.
 * User: sschaffe
 * Date: 27.01.12
 * Time: 10:48
 * To change this template use File | Settings | File Templates.
 */
require_once 'autoload.php';

use MarmottaClient\ClientConfiguration;
use MarmottaClient\Clients\SPARQLClient;

$config = new ClientConfiguration("http://localhost:8080/mtta");

$client = new SPARQLClient($config);

echo "TEST SPARQL SELECT:\n";
foreach($client->select("SELECT ?r ?n WHERE { ?r <http://xmlns.com/foaf/0.1/name> ?n }") as $row) {
    echo $row["r"] . " has name " . $row["n"] . "\n";
}


echo "TEST SPARQL ASK:\n";
echo "should be true: " . $client->ask("ASK { ?r <http://xmlns.com/foaf/0.1/name> ?n }") . "\n";
echo "should be false: " . $client->ask("ASK { ?r <http://xmlns.com/foaf/0.1/brzlbrnft> ?n }")  . "\n";


?>