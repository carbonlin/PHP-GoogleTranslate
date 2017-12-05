var PMA_messages = new Array();
PMA_messages['strNoDropDatabases'] = "刪除資料庫 \"DROP DATABASE\" 指令已經被停用。";
PMA_messages['strConfirm'] = "確認";
PMA_messages['strDoYouReally'] = "您確定要執行 \"%s\"？";
PMA_messages['strDropDatabaseStrongWarning'] = "您正要刪除(DESTROY)一個完整的資料庫！";
PMA_messages['strDropTableStrongWarning'] = "您正要刪除(DESTROY)整張資料表!";
PMA_messages['strTruncateTableStrongWarning'] = "您正要清空(TRUNCATE)整張資料表!";
PMA_messages['strDeleteTrackingData'] = "刪除此資料表的追蹤資料？";
PMA_messages['strDeleteTrackingDataMultiple'] = "刪除這些資料表的追蹤資料？";
PMA_messages['strDeleteTrackingVersion'] = "刪除此版本的追蹤資料？";
PMA_messages['strDeleteTrackingVersionMultiple'] = "刪除這些版本的追蹤資料？";
PMA_messages['strDeletingTrackingEntry'] = "刪除追蹤報表的項目？";
PMA_messages['strDeletingTrackingData'] = "刪除追蹤資料中";
PMA_messages['strDroppingPrimaryKeyIndex'] = "刪除主鍵(Primary Key)/索引(Index)中";
PMA_messages['strDroppingForeignKey'] = "正在刪除外鍵(Foreign Key)。";
PMA_messages['strOperationTakesLongTime'] = "此操作將會花費較長的時間，請確定是否繼續執行?";
PMA_messages['strDropUserGroupWarning'] = "您確定要刪除群組「%s」？";
PMA_messages['strConfirmDeleteQBESearch'] = "您確定要刪除查詢「%s」？";
PMA_messages['strConfirmNavigation'] = "您有尚未儲存的變更，您確定要離開此頁面？";
PMA_messages['strDropUserWarning'] = "您確定要解除(Revoke)己選擇使用者的權限？";
PMA_messages['strDeleteCentralColumnWarning'] = "您確定要刪除此中央欄位？";
PMA_messages['strDropRTEitems'] = "您確定要刪除選擇的項目？";
PMA_messages['strDropPartitionWarning'] = "您確定要移除(DROP)選擇的分區？ 這同時也會刪除(DELETE)與選擇分區相關的資料！";
PMA_messages['strTruncatePartitionWarning'] = "您確定要清空(TRUNCATE)選擇的分區？";
PMA_messages['strRemovePartitioningWarning'] = "您確定要移除分區？";
PMA_messages['strResetSlaveWarning'] = "您確定要執行 RESET SLAVE？";
PMA_messages['strChangeColumnCollation'] = "此操作將會轉換您的資料至新的編碼與排序。在極少數的情況，特別是在新的編碼與排序不存的字元，此程序可能造成資料在新的編碼與排序顯示不正確，在這種情況之下我們建議您還原回原來的編碼與排序，並且參考以下文件的提示： <a href=\"%s\" target=\"garbled_data_wiki\">部份資料</a>.<br/><br/>您確定您要更改編碼與排序(Collation)並轉換資料？";
PMA_messages['strChangeAllColumnCollationsWarning'] = "雖然 MySQL 在此操作會嘗試對應編碼與排序之間的資料值，但若字元集不完整可能會造成資料遺失，且因此遺失的資料將<b>無法</b>透過將欄位轉換回原編碼與排序來還原。<b>建議使用於資料表結構頁面的欄位編輯功能 (\"更改\" 連結) 來轉換現有的資料。</b><br/><br/>您確定您要更改所有欄位編碼與排序(Collation)並轉換資料？";
PMA_messages['strSaveAndClose'] = "儲存並關閉";
PMA_messages['strReset'] = "重新設定";
PMA_messages['strResetAll'] = "全部重設";
PMA_messages['strFormEmpty'] = "表單內尚有資料值未填寫！";
PMA_messages['strRadioUnchecked'] = "選至少選擇其中一個項目！";
PMA_messages['strEnterValidNumber'] = "請輸入一個有效的數字！";
PMA_messages['strEnterValidLength'] = "請輸入一個有效的長度！";
PMA_messages['strAddIndex'] = "新增索引";
PMA_messages['strEditIndex'] = "編輯索引";
PMA_messages['strAddToIndex'] = "增加 %s 個欄位至索引";
PMA_messages['strCreateSingleColumnIndex'] = "建立單一欄位索引";
PMA_messages['strCreateCompositeIndex'] = "建立組合索引";
PMA_messages['strCompositeWith'] = "組合使用：";
PMA_messages['strMissingColumn'] = "請選擇要建立索引的欄位。";
PMA_messages['strLeastColumnError'] = "至少要增加一個欄位。";
PMA_messages['strPreviewSQL'] = "預覽 SQL";
PMA_messages['strSimulateDML'] = "模擬查詢";
PMA_messages['strMatchedRows'] = "符合條件的列數：";
PMA_messages['strSQLQuery'] = "SQL 查詢：";
PMA_messages['strYValues'] = "Y 軸值";
PMA_messages['strHostEmpty'] = "您尚未填寫主機名稱！";
PMA_messages['strUserEmpty'] = "您尚未填寫使用者帳號！";
PMA_messages['strPasswordEmpty'] = "您尚未填寫密碼！";
PMA_messages['strPasswordNotSame'] = "兩次輸入的密碼不一致！";
PMA_messages['strRemovingSelectedUsers'] = "正在刪除已選擇的使用者";
PMA_messages['strClose'] = "關閉";
PMA_messages['strTemplateCreated'] = "已建立樣板。";
PMA_messages['strTemplateLoaded'] = "已讀取樣板。";
PMA_messages['strTemplateUpdated'] = "己更新樣板。";
PMA_messages['strTemplateDeleted'] = "已刪除樣板。";
PMA_messages['strOther'] = "其他";
PMA_messages['strThousandsSeparator'] = ",";
PMA_messages['strDecimalSeparator'] = ".";
PMA_messages['strChartConnectionsTitle'] = "連線 / 程序";
PMA_messages['strIncompatibleMonitorConfig'] = "本地端即時監控設定檔不相容！";
PMA_messages['strIncompatibleMonitorConfigDescription'] = "在您瀏覽器內的圖表版面設定無法相容於新版的即時監控，可能已無法使用。 請於「<i>設定</i>」選單中重新設定以避免發生不可預期的錯誤。";
PMA_messages['strQueryCacheEfficiency'] = "查詢快取有效率";
PMA_messages['strQueryCacheUsage'] = "查詢快取使用率";
PMA_messages['strQueryCacheUsed'] = "查詢快取已使用";
PMA_messages['strSystemCPUUsage'] = "系統 CPU 使用率";
PMA_messages['strSystemMemory'] = "系統記憶體";
PMA_messages['strSystemSwap'] = "系統暫存區";
PMA_messages['strAverageLoad'] = "平均負載";
PMA_messages['strTotalMemory'] = "記憶體總計";
PMA_messages['strCachedMemory'] = "已快取記憶體";
PMA_messages['strBufferedMemory'] = "已緩衝記憶體";
PMA_messages['strFreeMemory'] = "閒置記憶體";
PMA_messages['strUsedMemory'] = "已使用記憶體";
PMA_messages['strTotalSwap'] = "交換空間總計";
PMA_messages['strCachedSwap'] = "已快取交換空間";
PMA_messages['strUsedSwap'] = "已使用交換空間";
PMA_messages['strFreeSwap'] = "未使用交換空間";
PMA_messages['strBytesSent'] = "已送出的位元組";
PMA_messages['strBytesReceived'] = "已接收的位元組";
PMA_messages['strConnections'] = "連線";
PMA_messages['strProcesses'] = "程序";
PMA_messages['strB'] = "B";
PMA_messages['strKiB'] = "KB";
PMA_messages['strMiB'] = "MB";
PMA_messages['strGiB'] = "GB";
PMA_messages['strTiB'] = "TB";
PMA_messages['strPiB'] = "PB";
PMA_messages['strEiB'] = "EB";
PMA_messages['strNTables'] = "%d 個資料表";
PMA_messages['strQuestions'] = "查詢次數";
PMA_messages['strTraffic'] = "流量";
PMA_messages['strSettings'] = "設定";
PMA_messages['strAddChart'] = "新增圖表至格線";
PMA_messages['strAddOneSeriesWarning'] = "請至少增加一個變數到資料序列！";
PMA_messages['strNone'] = "無";
PMA_messages['strResumeMonitor'] = "繼續監控";
PMA_messages['strPauseMonitor'] = "暫停監控";
PMA_messages['strStartRefresh'] = "開始自動更新";
PMA_messages['strStopRefresh'] = "停止自動更新";
PMA_messages['strBothLogOn'] = "general_log 與 slow_query_log 皆已啟用。";
PMA_messages['strGenLogOn'] = "general_log 已啟用。";
PMA_messages['strSlowLogOn'] = "slow_query_log 已啟用。";
PMA_messages['strBothLogOff'] = "slow_query_log 與 general_log 皆已停用。";
PMA_messages['strLogOutNotTable'] = "log_output 尚未被設定為 TABLE。";
PMA_messages['strLogOutIsTable'] = "log_output 目前設定為 TABLE。";
PMA_messages['strSmallerLongQueryTimeAdvice'] = "slow_query_log 已啟用，但伺服器只記錄執行時間超過 %d 秒的查詢。建議根據您的系統狀況將 long_query_time 設定為 0-2 秒之間。";
PMA_messages['strLongQueryTimeSet'] = "long_query_time 目前設定為 %d 秒。";
PMA_messages['strSettingsAppliedGlobal'] = "下設定將會套用至資料庫的全域設定直到系統重新啟動後還原預設值:";
PMA_messages['strSetLogOutput'] = "將 log_output 設定至 %s";
PMA_messages['strEnableVar'] = "啓用 %s";
PMA_messages['strDisableVar'] = "停用 %s";
PMA_messages['setSetLongQueryTime'] = "將 long_query_time 設定為 %d 秒。";
PMA_messages['strNoSuperUser'] = "您無法修改這些變數，請使用 root 帳號登入或是聯絡該資料庫的管理人員。";
PMA_messages['strChangeSettings'] = "更改設定";
PMA_messages['strCurrentSettings'] = "目前設定";
PMA_messages['strChartTitle'] = "圖表標題";
PMA_messages['strDifferential'] = "差異";
PMA_messages['strDividedBy'] = "使用 %s 區分";
PMA_messages['strUnit'] = "單位";
PMA_messages['strFromSlowLog'] = "從緩慢記錄";
PMA_messages['strFromGeneralLog'] = "從一般記錄";
PMA_messages['strServerLogError'] = "此伺服器記錄中的查詢所使用的資料庫名稱不存在。";
PMA_messages['strAnalysingLogsTitle'] = "分析記錄中";
PMA_messages['strAnalysingLogs'] = "分析並讀取記錄中。請稍候。";
PMA_messages['strCancelRequest'] = "取消請求";
PMA_messages['strCountColumnExplanation'] = "此欄位將完全相同的查詢合併以數量顯示。系統僅使用 SQL 查詢條件做為群組的依據其餘的查詢參數，可能會有所不同，如: 開始時間。";
PMA_messages['strMoreCountColumnExplanation'] = "當您選擇將新增(INSERT)查詢分群組顯示，則所有新增至相同資料表的查詢將會合併顯示，但不包含資料。";
PMA_messages['strLogDataLoaded'] = "已讀取記錄資料，在此時間區間已執行查詢指令:";
PMA_messages['strJumpToTable'] = "切換至記錄資料表";
PMA_messages['strNoDataFoundTitle'] = "查無資料";
PMA_messages['strNoDataFound'] = "已分析記錄，但在此時間區間內沒有任何資料。";
PMA_messages['strAnalyzing'] = "分析中…";
PMA_messages['strExplainOutput'] = "輸出說明";
PMA_messages['strStatus'] = "狀態";
PMA_messages['strTime'] = "時間";
PMA_messages['strTotalTime'] = "總計時間:";
PMA_messages['strProfilingResults'] = "分析結果";
PMA_messages['strTable'] = "資料表";
PMA_messages['strChart'] = "圖表";
PMA_messages['strFiltersForLogTable'] = "記錄資料表搜尋選項";
PMA_messages['strFilter'] = "搜尋";
PMA_messages['strFilterByWordRegexp'] = "使用純文字或 <a href=\"https://dev.mysql.com/doc/refman/5.1/en/regexp.html\" target=\"_blank\">正規表式法(REGEXP)</a> 進行搜尋:";
PMA_messages['strIgnoreWhereAndGroup'] = "依查詢分群顯示，忽略 WHERE 的條件中的變數資料";
PMA_messages['strSumRows'] = "已分組的列數總計:";
PMA_messages['strTotal'] = "總計:";
PMA_messages['strLoadingLogs'] = "讀取記錄中";
PMA_messages['strRefreshFailed'] = "即時監控無法進行重新整理";
PMA_messages['strInvalidResponseExplanation'] = "在向伺服器取得新的圖表資料時取得無效的回應，可能是您的連線階段已經過期。 請重新整理頁面並重新輸入帳號密碼解決此問題。";
PMA_messages['strReloadPage'] = "重新整理頁面";
PMA_messages['strAffectedRows'] = "已影響的列數:";
PMA_messages['strFailedParsingConfig'] = "讀取設定檔時發生錯誤。 設定檔看起來不是有效的 JSON 格式。";
PMA_messages['strFailedBuildingGrid'] = "無法使用匯入的設定檔建立圖表，將重設為預設的設定值…";
PMA_messages['strImport'] = "匯入";
PMA_messages['strImportDialogTitle'] = "無法匯入即時監控的設定";
PMA_messages['strImportDialogMessage'] = "請選擇您欲匯入的檔案。";
PMA_messages['strNoImportFile'] = "伺服器上無可用來匯入的檔案！";
PMA_messages['strAnalyzeQuery'] = "分析查詢";
PMA_messages['strAdvisorSystem'] = "建議系統";
PMA_messages['strPerformanceIssues'] = "可能影響執行效率的問題";
PMA_messages['strIssuse'] = "問題";
PMA_messages['strRecommendation'] = "建議";
PMA_messages['strRuleDetails'] = "規則詳細資訊";
PMA_messages['strJustification'] = "實際狀況";
PMA_messages['strFormula'] = "使用的變數 / 公式";
PMA_messages['strTest'] = "檢驗方式";
PMA_messages['strFormatting'] = "格式化 SQL…";
PMA_messages['strNoParam'] = "查無參數!";
PMA_messages['strGo'] = "執行";
PMA_messages['strCancel'] = "取消";
PMA_messages['strPageSettings'] = "頁面相關設定";
PMA_messages['strApply'] = "套用";
PMA_messages['strLoading'] = "載入中…";
PMA_messages['strAbortedRequest'] = "已放棄請求!!";
PMA_messages['strProcessingRequest'] = "請求處理中";
PMA_messages['strRequestFailed'] = "請求失敗!!";
PMA_messages['strErrorProcessingRequest'] = "處理要求時發生錯誤";
PMA_messages['strErrorCode'] = "錯誤代碼: %s";
PMA_messages['strErrorText'] = "錯誤訊息: %s";
PMA_messages['strNoDatabasesSelected'] = "尚未選擇任何資料庫。";
PMA_messages['strDroppingColumn'] = "刪除欄位";
PMA_messages['strAddingPrimaryKey'] = "新增主鍵中";
PMA_messages['strOK'] = "確定";
PMA_messages['strDismiss'] = "點選關閉此通知";
PMA_messages['strRenamingDatabases'] = "更改資料庫名稱中";
PMA_messages['strCopyingDatabase'] = "複製資料庫中";
PMA_messages['strChangingCharset'] = "更改字元編碼";
PMA_messages['strNo'] = "否";
PMA_messages['strForeignKeyCheck'] = "開啟外鍵(Foreign Key)檢查";
PMA_messages['strErrorRealRowCount'] = "取得實際列數失敗。";
PMA_messages['strSearching'] = "搜尋中";
PMA_messages['strHideSearchResults'] = "隱藏搜尋結果";
PMA_messages['strShowSearchResults'] = "顯示搜尋結果";
PMA_messages['strBrowsing'] = "瀏覽";
PMA_messages['strDeleting'] = "刪除";
PMA_messages['MissingReturn'] = "Stored Function 的定義中必須要有 RETURN 敘述句！";
PMA_messages['strExport'] = "匯出";
PMA_messages['enum_editor'] = "ENUM/SET 編輯器";
PMA_messages['enum_columnVals'] = "%s 欄位的值";
PMA_messages['enum_newColumnVals'] = "新欄位的值";
PMA_messages['enum_hint'] = "請分別將資料填入以下欄位。";
PMA_messages['enum_addValue'] = "增加 %d 個值";
PMA_messages['strImportCSV'] = "備註：若檔案中包含多個資料表，它們會被結合成同一個資料表。";
PMA_messages['strHideQueryBox'] = "隱藏查詢框";
PMA_messages['strShowQueryBox'] = "顯示查詢框";
PMA_messages['strEdit'] = "編輯";
PMA_messages['strDelete'] = "刪除";
PMA_messages['strNotValidRowNumber'] = "%d 不是有效的資料列號。";
PMA_messages['strBrowseForeignValues'] = "瀏覽關聯的值";
PMA_messages['strNoAutoSavedQuery'] = "無自動儲存的查詢";
PMA_messages['strBookmarkVariable'] = "變數 %d：";
PMA_messages['pickColumn'] = "選取";
PMA_messages['pickColumnTitle'] = "欄位選擇器";
PMA_messages['searchList'] = "搜尋此清單";
PMA_messages['strEmptyCentralList'] = "無欄位於中央清單。請確定資料庫 %s 的中央欄位清單中的欄位不存在於目前的資料表。";
PMA_messages['seeMore'] = "查看更多資訊";
PMA_messages['confirmTitle'] = "您確定?";
PMA_messages['makeConsistentMessage'] = "此動作可能會變更部份欄位的定義。<br/>您是否確定要繼續執行？";
PMA_messages['strContinue'] = "繼續";
PMA_messages['strAddPrimaryKey'] = "新增主鍵";
PMA_messages['strPrimaryKeyAdded'] = "已新增主鍵(Primary key)。";
PMA_messages['strToNextStep'] = "帶您至下一步驟 …";
PMA_messages['strFinishMsg'] = "表格 \'%s\' 正規化的第一步驟已經完成。";
PMA_messages['strEndStep'] = "結束步驟";
PMA_messages['str2NFNormalization'] = "第二正規化 (2NF)";
PMA_messages['strDone'] = "完成";
PMA_messages['strConfirmPd'] = "確認部份相依";
PMA_messages['strSelectedPd'] = "己選擇部份相依如下：";
PMA_messages['strPdHintNote'] = "注意：a, b -> d,f 代表 a 與 b 的欄位值合併後可以決定欄位 d 與欄位 f 的值。";
PMA_messages['strNoPdSelected'] = "尚未選擇部份相依！";
PMA_messages['strBack'] = "返回";
PMA_messages['strShowPossiblePd'] = "根據資料表中的資料顯示可能的部份相依";
PMA_messages['strHidePd'] = "隱藏部份相依清單";
PMA_messages['strWaitForPd'] = "稍坐一下！這可能要花一些時間，實際時間將取決於您的資料大小以及資料量。";
PMA_messages['strStep'] = "步驟";
PMA_messages['strMoveRepeatingGroup'] = "<ol><b>將會執行以下動作：</b><li>從資料表 %s 移除(DROP)欄位 %s</li><li>建立下列資料表</li>";
PMA_messages['strNewTablePlaceholder'] = "Enter new table name";
PMA_messages['strNewColumnPlaceholder'] = "Enter column name";
PMA_messages['str3NFNormalization'] = "第三正規化 (3NF)";
PMA_messages['strConfirmTd'] = "確認遞移相依";
PMA_messages['strSelectedTd'] = "己選擇的相依如下：";
PMA_messages['strNoTdSelected'] = "尚未選擇任何相依！";
PMA_messages['strSave'] = "儲存";
PMA_messages['strHideSearchCriteria'] = "隱藏搜尋條件";
PMA_messages['strShowSearchCriteria'] = "顯示搜尋條件";
PMA_messages['strRangeSearch'] = "範圍搜尋";
PMA_messages['strColumnMax'] = "欄位最大值：";
PMA_messages['strColumnMin'] = "欄位最小值：";
PMA_messages['strMinValue'] = "最小值：";
PMA_messages['strMaxValue'] = "最大值：";
PMA_messages['strHideFindNReplaceCriteria'] = "隱藏搜尋與取代條件";
PMA_messages['strShowFindNReplaceCriteria'] = "顯示尋找並替換條件";
PMA_messages['strDisplayHelp'] = "<ul><li>每一個點代表一筆資料。</li><li>將滑鼠指到資料點上可以顯示其標籤。</li><li>放大，請使用滑鼠選擇一個區域。</li><li>點選「重設縮放大小」按鈕可以回到原始大小。</li><li>點選資料點以瀏覽或修改該筆資料。</li><li>此圖表可拖曳右下角邊框進行縮放。</li></ul>";
PMA_messages['strHelpTitle'] = "Zoom search instructions";
PMA_messages['strInputNull'] = "<strong>請選擇兩個欄位</strong>";
PMA_messages['strSameInputs'] = "<strong>請選擇兩個不同的欄位</strong>";
PMA_messages['strDataPointContent'] = "資料點內容";
PMA_messages['strIgnore'] = "略過";
PMA_messages['strCopy'] = "複製";
PMA_messages['strX'] = "X";
PMA_messages['strY'] = "Y";
PMA_messages['strPoint'] = "點";
PMA_messages['strPointN'] = "點 %d";
PMA_messages['strLineString'] = "一維折線";
PMA_messages['strPolygon'] = "多邊形";
PMA_messages['strGeometry'] = "幾何形";
PMA_messages['strInnerRing'] = "內環";
PMA_messages['strOuterRing'] = "外環";
PMA_messages['strAddPoint'] = "新增一個點";
PMA_messages['strAddInnerRing'] = "新增內環";
PMA_messages['strYes'] = "是";
PMA_messages['strCopyEncryptionKey'] = "您是否要複製加密金鑰？";
PMA_messages['strEncryptionKey'] = "加密金鑰";
PMA_messages['strLockToolTip'] = "代表您已對此頁做了變更，在您放棄這些變更前會先提示您";
PMA_messages['strSelectReferencedKey'] = "請選擇參考鍵(Reference Key)";
PMA_messages['strSelectForeignKey'] = "請選擇外鍵(Foreign Key)";
PMA_messages['strPleaseSelectPrimaryOrUniqueKey'] = "請選擇主鍵(Primary Key)或唯一鍵(Unique Key)！";
PMA_messages['strChangeDisplay'] = "請選擇要顯示的欄位";
PMA_messages['strLeavingDesigner'] = "你尚未儲存修改的資料，請確認是否要捨棄這些資料？";
PMA_messages['strPageName'] = "頁面名稱";
PMA_messages['strSavePage'] = "儲存頁面";
PMA_messages['strSavePageAs'] = "儲存頁面為";
PMA_messages['strOpenPage'] = "開啟頁面";
PMA_messages['strDeletePage'] = "刪除頁面";
PMA_messages['strUntitled'] = "未命名";
PMA_messages['strSelectPage'] = "請選擇頁面以繼續執行";
PMA_messages['strEnterValidPageName'] = "請輸入一個有效的頁面名稱";
PMA_messages['strLeavingPage'] = "您是否要儲存變更至目前頁面？";
PMA_messages['strSuccessfulPageDelete'] = "已成功刪除頁面";
PMA_messages['strExportRelationalSchema'] = "匯出關聯式網要";
PMA_messages['strModificationSaved'] = "已儲存修改";
PMA_messages['strAddOption'] = "新增欄位 \"%s\" 的選項。";
PMA_messages['strObjectsCreated'] = "已建立 %d 個物件。";
PMA_messages['strSubmit'] = "送出";
PMA_messages['strCellEditHint'] = "按下 ESC 取消編輯。";
PMA_messages['strSaveCellWarning'] = "有一些修改的資料尚未儲存，你確定要不儲存直接離開本頁？";
PMA_messages['strColOrderHint'] = "使用拖曳來重新排序。";
PMA_messages['strSortHint'] = "使用本欄位進行資料排序。";
PMA_messages['strMultiSortHint'] = "Shift+滑鼠點選 來將此欄位加入 ORDER BY 子句或者切換 ASC/DESC。<br />- Ctrl+滑鼠點選 或 Alt+滑鼠點選 (Mac: Shift+Option+滑鼠點選) 來從 ORDER BY 子句中移除欄位";
PMA_messages['strColMarkHint'] = "點此標記或取消標記。";
PMA_messages['strColNameCopyHint'] = "雙擊點選以複製欄位名稱。";
PMA_messages['strColVisibHint'] = "點選下拉箭頭<br />以切換欄位的顯示程度。";
PMA_messages['strShowAllCol'] = "全部顯示";
PMA_messages['strAlertNonUnique'] = "此資料表沒有唯一欄位用來辦示資料。 有關資料表修改、複製、刪除的功能可能會無法儲存。";
PMA_messages['strEnterValidHex'] = "請輸入一個有效的十六進位字串。有效的字元為 0-9, A-F。";
PMA_messages['strShowAllRowsWarning'] = "您確定要顯示所有資料列？使用在大型的資料表可能會造成瀏覽器當機。";
PMA_messages['strOriginalLength'] = "原始長度";
PMA_messages['dropImportMessageCancel'] = "取消";
PMA_messages['dropImportMessageAborted'] = "中斷連線";
PMA_messages['dropImportMessageFailed'] = "已失敗";
PMA_messages['dropImportMessageSuccess'] = "成功";
PMA_messages['dropImportImportResultHeader'] = "匯入狀態";
PMA_messages['dropImportDropFiles'] = "將檔案拖曳至此處";
PMA_messages['dropImportSelectDB'] = "請先選擇資料庫";
PMA_messages['print'] = "列印";
PMA_messages['back'] = "返回";
PMA_messages['strGridEditFeatureHint'] = "您可以點兩下以選表格內容<br />直接做編輯修改。";
PMA_messages['strGoToLink'] = "前往此連結：";
PMA_messages['strColNameCopyTitle'] = "複製欄位名稱。";
PMA_messages['strColNameCopyText'] = "點選右鍵將欄位名稱複製到您的剪貼簿。";
PMA_messages['strGeneratePassword'] = "產生密碼";
PMA_messages['strGenerate'] = "產生";
PMA_messages['strChangePassword'] = "修改密碼";
PMA_messages['strMore'] = "更多";
PMA_messages['strShowPanel'] = "顯示面板";
PMA_messages['strHidePanel'] = "隱藏面板";
PMA_messages['strUnhideNavItem'] = "顯示隱藏的導覽樹項目。";
PMA_messages['linkWithMain'] = "連結主面板";
PMA_messages['unlinkWithMain'] = "取消連結主面板";
PMA_messages['strInvalidPage'] = "已無歷史記錄頁面或頁面已經逾期。";
PMA_messages['strNewerVersion'] = "新的 phpMyAdmin 已經發佈，請考慮升級至最新的版本（版本 %s，於 %s 發佈）。";
PMA_messages['strLatestAvailable'] = "，最新的穩定版:";
PMA_messages['strUpToDate'] = "最新";
PMA_messages['strCreateView'] = "新增檢視表";
PMA_messages['strSendErrorReport'] = "傳送錯誤報告";
PMA_messages['strSubmitErrorReport'] = "送出錯誤報告";
PMA_messages['strErrorOccurred'] = "發生 JavaScript 嚴重錯誤，您是否要回報錯誤報告?";
PMA_messages['strChangeReportSettings'] = "更改報告設定";
PMA_messages['strShowReportDetails'] = "顯示報告詳細資訊";
PMA_messages['strTimeOutError'] = "因 PHP 執行期時間限制太短，您的資料未完成匯出動作！";
PMA_messages['strTooManyInputs'] = "警告: 此頁面中的表單超過 %d 個欄位，因超出 PHP 中 max_input_vars 設定值的限制，在送出時可能會忽略部份欄位。";
PMA_messages['phpErrorsFound'] = "<div class=\"error\">已偵測到伺服器上發生部份錯誤！<br/>請瀏覽此視窗的底部。<div><input id=\"pma_ignore_errors_popup\" type=\"submit\" value=\"略過\" class=\"floatright\" style=\"margin-top: 20px;\"><input id=\"pma_ignore_all_errors_popup\" type=\"submit\" value=\"全部略過\" class=\"floatright\" style=\"margin-top: 20px;\"></div></div>";
PMA_messages['phpErrorsBeingSubmitted'] = "<div class=\"error\">已偵測到伺服器上發生部份錯誤！<br/>根據您的設定，它們正被提交，請耐心等候。<br/><img src=\"./themes/pmahomme/img/ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\"/></div>";
PMA_messages['strConsoleRequeryConfirm'] = "再執行此查詢一次？";
PMA_messages['strConsoleDeleteBookmarkConfirm'] = "您真的要刪除此書籤？";
PMA_messages['strConsoleDebugError'] = "取得 SQL 除錯資訊時發生一些錯誤。";
PMA_messages['strConsoleDebugSummary'] = "%s 筆查詢已執行 %s 次，使用 %s 秒。";
PMA_messages['strConsoleDebugArgsSummary'] = "已傳入 %s 個參數";
PMA_messages['strConsoleDebugShowArgs'] = "顯示參數";
PMA_messages['strConsoleDebugHideArgs'] = "隱藏參數";
PMA_messages['strConsoleDebugTimeTaken'] = "使用時間：";
PMA_messages['strNoLocalStorage'] = "存取您的瀏覽器儲存空間時發生錯誤，部份功能可能無法正常運作。似乎是瀏覽器不支援儲存空間或者已達空間使用上限。在 Firefox 中，損壞的儲存空間可能會造成此問題，您可清空您的 \"離線網站資料\" 來解決。 在 Safari 通常是使用 \"隱私模式瀏覽\"。";
PMA_messages['strCopyTablesTo'] = "複製資料表到";
PMA_messages['strAddPrefix'] = "增加資料表字首";
PMA_messages['strReplacePrefix'] = "含字首取代資料表";
PMA_messages['strCopyPrefix'] = "含字首複製資料表";
var themeCalendarImage = './themes/pmahomme/img/b_calendar.png';
var pmaThemeImage = './themes/pmahomme/img/';
var mysql_doc_template = './url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.5%2Fen%2F%25s.html';
var maxInputVars = 2500;
if ($.datepicker) {
$.datepicker.regional['']['closeText'] = "完成";
$.datepicker.regional['']['prevText'] = "上個月";
$.datepicker.regional['']['nextText'] = "下個月";
$.datepicker.regional['']['currentText'] = "今天";
$.datepicker.regional['']['monthNames'] = ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月",];
$.datepicker.regional['']['monthNamesShort'] = ["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月",];
$.datepicker.regional['']['dayNames'] = ["星期日","星期一","星期二","星期三","星期四","星期五","星期六",];
$.datepicker.regional['']['dayNamesShort'] = ["週日","週一","週二","週三","週四","週五","週六",];
$.datepicker.regional['']['dayNamesMin'] = ["日","一","二","三","四","五","六",];
$.datepicker.regional['']['weekHeader'] = "週";
$.datepicker.regional['']['showMonthAfterYear'] = true;
$.datepicker.regional['']['yearSuffix'] = "";
$.extend($.datepicker._defaults, $.datepicker.regional['']);
} /* if ($.datepicker) */

if ($.timepicker) {
$.timepicker.regional['']['timeText'] = "時間";
$.timepicker.regional['']['hourText'] = "時";
$.timepicker.regional['']['minuteText'] = "分";
$.timepicker.regional['']['secondText'] = "秒";
$.extend($.timepicker._defaults, $.timepicker.regional['']);
} /* if ($.timepicker) */

function extendingValidatorMessages() {
$.extend($.validator.messages, {
required: "此欄位為必填", remote: "請修正此欄位", email: "請輸入一個有效的電子郵件位址", url: "請輸入一個有效的 URL", date: "請輸入一個有效的日期", dateISO: "請輸入一個有效的日期 ( ISO )", number: "請輸入一個有效的數字", creditcard: "請輸入一個有效的信用卡號", digits: "請輸入數字", equalTo: "請再輸入一次", maxlength: $.validator.format("請輸入不超過 {0} 個字元"), minlength: $.validator.format("請輸入不少於 {0} 個字元"), rangelength: $.validator.format("請輸入介於  {0} 與 {1} 個字元長度間的值"), range: $.validator.format("請輸入介於  {0} 與 {1} 間的值"), max: $.validator.format("請輸入小於等於 {0} 的值"), min: $.validator.format("請輸入大於等於 {0} 的值"), validationFunctionForDateTime: $.validator.format("請輸入有效的日期或時間"), validationFunctionForHex: $.validator.format("請輸入有效的 HEX 輸入值"), validationFunctionForFuns: $.validator.format("錯誤")
});
} /* if ($.validator) */