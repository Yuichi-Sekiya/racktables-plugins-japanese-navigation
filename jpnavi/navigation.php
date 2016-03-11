<?php

# RackTables Extensions - Japanese Navigation
# 
# 2016-03-11 Hipontire<miyoshi@outlook.com>
$page['index']['title'] = 'メニュー';						// Main page
$page['rackspace']['title'] = 'ラック管理';					// Rackspace
$tab['rackspace']['default'] = '一覧';						// Browse
$tab['rackspace']['editlocations'] = 'ロケーション管理';	// Manage locations
$tab['rackspace']['editrows'] = '列管理';					// Manage rows
$tab['rackspace']['history'] = '履歴';						// History
$page['depot']['title'] = '機器';							// Objects
$tab['depot']['default'] = '表示';							// Browse
$tab['depot']['addmore'] = '続き';							// Add more
$tab['location']['default'] = '表示';						// View
$tab['location']['edit'] = 'プロパティ';					// Properties
$tab['location']['log'] = 'ログ';							// Log
$tab['location']['tags'] = 'タグ';							// Tags
$tab['location']['files'] = 'ファイル';						// Files
//$page['row']['bypass'] = 'row_id';
//$page['row']['bypass_type'] = 'uint';
$tab['row']['default'] = '表示';							// View
$tab['row']['edit'] = 'プロパティ';							// Properties
$tab['row']['editracks'] = 'ラック管理';					// Manage racks
$tab['row']['newrack'] = 'ラックを追加';					// Add new rack
$tab['row']['log'] = 'ログ';								// Log
$tab['row']['tagroller'] = 'タグ・ローラー';				// Tag roller
$tab['row']['files'] = 'ファイル';							// Files
//$page['rack']['bypass'] = 'rack_id';
//$page['rack']['bypass_type'] = 'uint';
$tab['rack']['default'] = '表示';							// View
$tab['rack']['edit'] = 'プロパティ';						// Properties
$tab['rack']['log'] = 'ログ';								// Log
$tab['rack']['design'] = 'デザイン';						// Design
$tab['rack']['problems'] = '問題点';						// Problems
$tab['rack']['tags'] = 'タグ';								// Tags
$tab['rack']['files'] = 'ファイル';							// Files';
//$page['object']['bypass'] = 'object_id';
//$page['object']['bypass_type'] = 'uint';
//$page['object']['bypass_tabs'] = array ('hl_port_id', 'hl_ip');
$tab['object']['default'] = '表示';							// View
$tab['object']['edit'] = 'プロパティ';						// Properties
$tab['object']['log'] = 'ログ';								// Log
$tab['object']['rackspace'] = 'ラック管理';					// Rackspace
$tab['object']['ports'] = 'ポート';							// Ports
$tab['object']['ip'] = 'IP';
$tab['object']['nat4'] = 'NATv4';
$tab['object']['liveports'] = 'Live ports';
$tab['object']['livecdp'] = 'Live CDP';
$tab['object']['livelldp'] = 'Live LLDP';
$tab['object']['snmpportfinder'] = 'SNMP同期';				// SNMP sync
$tab['object']['editrspvs'] = 'VS links';
$tab['object']['editvslinks'] = 'VSG links';
$tab['object']['autoports'] = 'AutoPorts';
$tab['object']['tags'] = 'タグ';							// Tags
$tab['object']['files'] = 'ファイル';						// Files
$tab['object']['ucs'] = 'UCS';
$tab['object']['8021qorder'] = 'VLAN ID';					// 802.1Q order
$tab['object']['8021qports'] = 'VLANポート';				// 802.1Q ports
$tab['object']['8021qsync'] = 'VLAN sync';					// 802.1Q sync
$tab['object']['cacti'] = 'Cactiグラフ';					// Cacti Graphs
$tab['object']['munin'] = 'Muninグラフ';					// Munin Graphs
$tab['ipv4space']['default'] = '一覧';						// Browse
$tab['ipv4space']['newrange'] = '追加';						// Add
$tab['ipv4space']['manage'] = '削除';						// Delete
$tab['ipv6space']['default'] = '一覧';						// Browse
$tab['ipv6space']['newrange'] = '追加';						// Add
$tab['ipv6space']['manage'] = '削除';						// Delete
//$page['ipv4net']['bypass'] = 'id';
//$page['ipv4net']['bypass_type'] = 'uint';
//$page['ipv4net']['bypass_tabs'] = array ('pg');
$tab['ipv4net']['default'] = '一覧';						// Browse
$tab['ipv4net']['properties'] = 'プロパティ';				// Properties
$tab['ipv4net']['liveptr'] = 'Live PTR';
$tab['ipv4net']['tags'] = 'タグ';							// Tags
$tab['ipv4net']['files'] = 'ファイル';						// Files
$tab['ipv4net']['8021q'] = 'VLAN';							// 802.1Q
//$page['ipv6net']['bypass'] = 'id';
//$page['ipv6net']['bypass_type'] = 'uint';
$tab['ipv6net']['default'] = '一覧';						// Browse
$tab['ipv6net']['properties'] = 'プロパティ';				// Properties
$tab['ipv6net']['tags'] = 'タグ';							// Tags
$tab['ipv6net']['files'] = 'ファイル';						// Files
$tab['ipv6net']['8021q'] = 'VLAN';							// 802.1Q
//$page['ipaddress']['bypass'] = 'ip';
//$page['ipaddress']['bypass_type'] = 'inet';
$tab['ipaddress']['default'] = '一覧';						// Browse
$tab['ipaddress']['properties'] = 'プロパティ';				// Properties
$tab['ipaddress']['assignment'] = 'アロケーション';			// Allocation
$tab['ipaddress']['log'] = '変更履歴';						// Change log
$page['ipv4slb']['title'] = 'IP SLB';
$tab['ipv4slb']['default'] = '仮想サービス';				// Virtual services
$tab['ipv4slb']['vs'] = 'VS groups';
$tab['ipv4slb']['lbs'] = 'ロードバランサー';				// Load balancers
$tab['ipv4slb']['rspools'] = 'RS pools';
$tab['ipv4slb']['rservers'] = '実サーバー';					// Real servers
$tab['ipv4slb']['defconfig'] = 'Default configs';
$tab['ipv4slb']['new_vs'] = 'new VS';
$tab['ipv4slb']['new_vsg'] = 'new VS group';
$tab['ipv4slb']['new_rs'] = 'new RS pool';
//$page['ipv4vs']['bypass'] = 'vs_id';
//$page['ipv4vs']['bypass_type'] = 'uint';
$tab['ipv4vs']['default'] = '表示';							// View
$tab['ipv4vs']['edit'] = '編集';							// Edit
$tab['ipv4vs']['editlblist'] = 'VS links';
$tab['ipv4vs']['tags'] = 'タグ';							// Tags
$tab['ipv4vs']['files'] = 'ファイル';						// Files
// $page['ipvs']['bypass'] = 'vs_id';
// $page['ipvs']['bypass_type'] = 'uint';
$tab['ipvs']['default'] = '表示';							// View
$tab['ipvs']['edit'] = '編集';								// Edit
$tab['ipvs']['editvslinks'] = 'VSG links';
$tab['ipvs']['tags'] = 'タグ';								// Tags
$tab['ipvs']['files'] = 'ファイル';							// Files
$tab['ipvs']['convert'] = '移行';							// Migrate
//$page['ipv4rspool']['bypass'] = 'pool_id';
//$page['ipv4rspool']['bypass_type'] = 'uint';
$tab['ipv4rspool']['default'] = '表示';						// View
$tab['ipv4rspool']['edit'] = '編集';						// Edit
$tab['ipv4rspool']['editlblist'] = 'VS links';
$tab['ipv4rspool']['editvslinks'] = 'VSG links';
$tab['ipv4rspool']['editrslist'] = 'RS list';
$tab['ipv4rspool']['tags'] = 'タグ';						// Tags
$tab['ipv4rspool']['files'] = 'ファイル';					// Files
//$page['search']['bypass'] = 'q';
$page['config']['title'] = '設定';							// Configuration
$page['userlist']['title'] = 'ローカルユーザー';			// Local users
$tab['userlist']['default'] = '表示';						// View
$tab['userlist']['edit'] = '編集';							// Edit
//$page['user']['bypass'] = 'user_id';
//$page['user']['bypass_type'] = 'uint';
$tab['user']['default'] = '表示';							// View
$tab['user']['properties'] = 'プロパティ';					// Properties
$tab['user']['tags'] = 'タグ';								// Tags
$tab['user']['files'] = 'ファイル';							// Files
$page['perms']['title'] = '権限';							// Permissions
$tab['perms']['default'] = '表示';							// View
$tab['perms']['edit'] = '編集';								// Edit
$page['parentmap']['title'] = 'オブジェクトコンテナの互換性';	// Object container compatibility
$tab['parentmap']['default'] = '表示';						// View
$tab['parentmap']['edit'] = '編集';							// Edit
$page['portmap']['title'] = 'ポートの互換性';				// Port compatibility
$tab['portmap']['default'] = '表示';						// View
$tab['portmap']['edit'] = '編集';							// Edit
$page['portifcompat']['title'] = '有効なポートのタイプ';	// Enabled port types
$tab['portifcompat']['default'] = '表示';					// View
$tab['portifcompat']['edit'] = '編集';						// Edit
$page['portoifs']['title'] = 'ポート外インターフェース';	// Port outer interfaces
$tab['portoifs']['default'] = '表示';						// View
$tab['portoifs']['edit'] = '編集';							// Edit
$page['attrs']['title'] = '属性';							// Attributes
$tab['attrs']['default'] = '表示';							// View
$tab['attrs']['editattrs'] = '属性の編集';					// Edit attributes
$tab['attrs']['editmap'] = 'マップを編集';					// Edit map
$page['dict']['title'] = 'ディクショナリ';					// Dictionary
$tab['dict']['default'] = '表示';							// View
$tab['dict']['chapters'] = 'チャプターの管理';				// Manage chapters
//$page['chapter']['bypass'] = 'chapter_no';
//$page['chapter']['bypass_type'] = 'uint';
$tab['chapter']['default'] = '表示';						// View
$tab['chapter']['edit'] = '編集';							// Edit
$page['ui']['title'] = 'ユーザーインターフェース';			// User interface
$tab['ui']['default'] = '表示';								// View
$tab['ui']['edit'] = '変更';								// Change
$tab['ui']['reset'] = 'リセット';							// Reset
$page['tagtree']['title'] = 'タグツリー';					// Tag tree
$tab['tagtree']['default'] = '表示';						// View
$tab['tagtree']['edit'] = '編集';							// Edit
$tab['tagtree']['resolve'] = '循環参照';					// Circular references
$page['myaccount']['title'] = 'マイアカウント';				// My account';
$tab['myaccount']['default'] = '情報';						// Info
$tab['myaccount']['mypassword'] = 'パスワード変更';			// Password change
$tab['myaccount']['interface'] = 'インターフェース設定';	// Interface preferences
$tab['myaccount']['qlinks'] = 'クイックリンク';				// Quick links
$page['cacti']['title'] = 'Cacti';
$tab['cacti']['default'] = '表示';							// View
$tab['cacti']['servers'] = 'サーバー管理';					// Manage servers
$page['munin']['title'] = 'Munin';
$tab['munin']['default'] = '表示';							// View
$tab['munin']['servers'] = 'サーバー管理';					// Manage servers
$page['cableconf']['title'] = 'パッチケーブル';				// Patch cables
$tab['cableconf']['default'] = '表示';						// View
$tab['cableconf']['connectors'] = 'コネクタの編集';			// Edit connectors
$tab['cableconf']['cabletypes'] = 'コネクタタイプの編集';	// Edit cable types
$tab['cableconf']['conncompat'] = 'コネクタの互換性';		// Connector compatibility
$tab['cableconf']['oifcompat'] = 'コネクタ外の互換性';		// Outer interface compatibility
$page['reports']['title'] = 'レポート';						// Reports
$tab['reports']['default'] = 'システム';					// System
$tab['reports']['rackcode'] = 'ラックコード';				// RackCode
$tab['reports']['ipv4'] = 'IPv4';
$tab['reports']['ipv6'] = 'IPv6';
$tab['reports']['ports'] = 'ポート';						// Ports
$tab['reports']['8021q'] = 'VLAN';							// 802.1Q
$tab['reports']['warranty'] = '有効期限';					// Expirations
$tab['reports']['integrity'] = 'データ連携';				// Data Integrity
$page['files']['title'] = 'ファイル';						// Files
$tab['files']['default'] = '一覧';							// Browse
$tab['files']['manage'] = '管理';							// Manage
//$page['file']['bypass'] = 'file_id';
//$page['file']['bypass_type'] = 'uint';
$tab['file']['default'] = '表示';							// View
$tab['file']['edit'] = 'プロパティ';						// Properties
$tab['file']['tags'] = 'タグ';								// Tags
$tab['file']['editText'] = 'テキストの編集';				// Edit text
$tab['file']['replaceData'] = 'アップロードして交換';		// Upload replacement
$tab['file']['download'] = 'ダウンロード';					// Download
$page['8021q']['title'] = 'VLAN';							// 802.1Q
$tab['8021q']['default'] = 'ステータス';					// Status
$tab['8021q']['vdlist'] = 'ドメイン管理';					// Manage domains
$tab['8021q']['vstlist'] = 'テンプレート管理';				// Manage templates
//$page['vlandomain']['bypass'] = 'vdom_id';
//$page['vlandomain']['bypass_type'] = 'uint';
$tab['vlandomain']['default'] = '表示';						// View
$tab['vlandomain']['vlanlist'] = 'VLANリスト';				// VLAN list
$tab['vlandomain']['8021qorder'] = 'VLAN ID';				// 802.1Q orders
//$page['vlan']['bypass'] = 'vlan_ck';
//$page['vlan']['bypass_type'] = 'uint-vlan1';
$tab['vlan']['default'] = '表示';							// View
$tab['vlan']['edit'] = '編集';								// Edit
$tab['vlan']['ipv4'] = 'IPv4';
$tab['vlan']['ipv6'] = 'IPv6';
//$page['vst']['bypass'] = 'vst_id';
//$page['vst']['bypass_type'] = 'uint';
$tab['vst']['default'] = '表示';							// View
$tab['vst']['editrules'] = '編集';							// Edit
$tab['vst']['8021qorder'] = 'VLAN ID';						// 802.1Q orders
$tab['vst']['tags'] = 'タグ';								// Tags
//$page['dqueue']['bypass'] = 'dqcode';
//$page['dqueue']['bypass_type'] = 'enum/dqcode';
$tab['dqueue']['default'] = '編集';							// View
$page['objectlog']['title'] = 'ログ記録';					// Log records
$tab['objectlog']['default'] = '表示';						// View
$page['virtual']['title'] = 'バーチャルリソース';			// Virtual Resources
$tab['virtual']['default'] = '概要';						// Summary
$page['cables']['title'] = 'パッチケーブル';				// Patch cables
$tab['cables']['default'] = '表示';							// View
$tab['cables']['amount'] = '消費/補充';						// Consume/replenish
$tab['cables']['heaps'] = 'ヒープ設定';						// Configure heaps
?>
