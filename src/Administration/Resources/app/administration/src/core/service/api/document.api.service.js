import ApiService from '../api.service';

/**
 * Gateway for the API end point "document"
 * @class
 * @extends ApiService
 */
class DocumentApiService extends ApiService {
    constructor(httpClient, loginService, apiEndpoint = 'document') {
        super(httpClient, loginService, apiEndpoint);
        this.name = 'documentService';
    }

    createDocument(orderId,
        documentTypeName,
        documentConfig = {},
        referencedDocumentId = null,
        additionalParams = {},
        additionalHeaders = {},
        file = null) {
        let route = `/_action/order/${orderId}/document/${documentTypeName}`;
        const headers = this.getBasicHeaders(additionalHeaders);

        const params = {
            config: documentConfig,
            referenced_document_id: referencedDocumentId
        };

        if (file) {
            params.static = true;
        }

        let docCreated = this.httpClient
            .post(route, params, {
                additionalParams,
                headers
            }).then((response) => {
                if (file && response.data.documentId) {
                    const fileName = file.name.split('.').shift();
                    const fileExtension = file.name.split('.').pop();
                    // eslint-disable-next-line max-len
                    route = `/_action/document/${response.data.documentId}/upload?fileName=${documentConfig.documentNumber}_${fileName}&extension=${fileExtension}`;
                    headers['Content-Type'] = file.type;
                    docCreated = this.httpClient.post(route, file, {
                        additionalParams,
                        headers
                    });
                }
                return docCreated;
            });
    }

    /**
     * @deprecated tag:v6.4.0 use getDocumentPreview to get the preview blob instead
     */
    generateDocumentPreviewLink(orderId, orderDeepLink, documentTypeName, config, context) {
        // eslint-disable-next-line max-len
        return `${context.apiPath}/_action/order/${orderId}/${orderDeepLink}/document/${documentTypeName}/preview?config=${config}`;
    }

    getDocumentPreview(orderId, orderDeepLink, documentTypeName, params) {
        const config = JSON.stringify(params);

        return this.httpClient
            .get(
                `/_action/order/${orderId}/${orderDeepLink}/document/${documentTypeName}/preview?config=${config}`,
                {
                    responseType: 'blob',
                    headers: this.getBasicHeaders()
                }
            );
    }

    getDocument(documentId, documentDeepLink, context, download = false) {
        return this.httpClient
            .get(
                `/_action/document/${documentId}/${documentDeepLink}${download ? '?download=1' : ''}`,
                {
                    responseType: 'blob',
                    headers: this.getBasicHeaders()
                }
            );
    }

    /**
     * @deprecated tag:v6.4.0 use getDocument to get the document blob instead
     */
    generateDocumentLink(documentId, documentDeepLink, context, download = false) {
        // eslint-disable-next-line max-len
        return `${context.apiPath}/_action/document/${documentId}/${documentDeepLink}${download ? '?download=1' : ''}`;
    }
}

export default DocumentApiService;
