# 專案介紹

這是以牙醫醫美診所為主體的診所預約系統專案

目前功能有:

- 預約第一階段取得所有治療項目
- 取得所有醫生與醫生之治療項目

## API 文件 

### 基礎預約五步驟 

### 1. 取得所有治療項目 : GET api/v1/treatment-items
-   Parameters：No
-   Request Body：No
- Response
- 200 OK
```json
{
    "success": true,
    "status": 200,
    "message": "取得所有治療項目成功",
    "data": [
        {
            "id": 1,
            "item_name": "基礎治療"
        },
        {
            "id": 2,
            "item_name": "定期檢查/3M塗氟"
        },
    ]
}
```

### 2. 取得所有醫生與醫生之治療項目，並顯示是否可選擇醫生 GET api/v1/doctor-items?treatment_item=treatment_item_id
- Parameters
  - `treatment_item_id` (Required, int): 治療項目的 ID
- Request Body : NO
- Response 
- 200 OK
```json
{
    "success": true,
    "status": 200,
    "message": "取得所有醫生與其治療項目成功",
    "data": [
        {
            "id": 1,
            "name": "王大明",
            "is_treatment_item": true,
            "treatment_items": [
                {
                    "id": 1,
                    "item_name": "基礎治療"
                },
                {
                    "id": 2,
                    "item_name": "定期檢查/3M塗氟"
                },
            ]
        },
        {
            "id": 2,
            "name": "廖大明",
            "is_treatment_item": false,
            "treatment_items": [
                {
                    "id": 6,
                    "item_name": "植牙治療"
                },
                {
                    "id": 7,
                    "item_name": "美白/貼片"
                },
                {
                    "id": 8,
                    "item_name": "智齒拔除"
                },
            ]
        },
    ]
}
```

