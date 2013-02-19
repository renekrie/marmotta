/**
 * Copyright (C) 2013 Salzburg Research.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
package org.apache.marmotta.ldclient.endpoint.youtube;

import org.apache.marmotta.commons.http.ContentType;
import org.apache.marmotta.ldclient.api.endpoint.Endpoint;

/**
 * Register the Youtube Channel Provider for all links to all user GData channels in YouTube
 * <p/>
 * Author: Sebastian Schaffert
 */
public class YoutubeChannelEndpointGData extends Endpoint {

    public YoutubeChannelEndpointGData() {
        super("YouTube Channel (GData)", "YouTube Channel", "^http://gdata\\.youtube\\.com/feeds/api/users/.*/uploads", null, 86400L);
        setPriority(PRIORITY_HIGH);
        addContentType(new ContentType("application","atom+xml"));
    }
}